<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\Role;
use App\Models\User;

class UsersController extends Controller
{
    //
    // public function index()
    // {
    //     $users = User::join('role', 'users.role_id', '=', 'role.id')
    //                  ->select('users.*', 'role.role_name')
    //                  ->get();

    //     return view('Dashboard.admin.users.index', compact('users'));
    // }

public function index(Request $r)
{
    $q = trim($r->get('q',''));

    $users = User::query()
        ->leftJoin('role','users.role_id','=','role.id')
        ->when($q, function($query) use ($q) {
            $like = "%{$q}%";
            $query->where(function($w) use ($like){
                $w->where('users.firstname','like',$like)
                  ->orWhere('users.lastname','like',$like)
                  ->orWhere('users.email','like',$like)
                  ->orWhere('users.city','like',$like)
                  ->orWhere('users.country','like',$like)
                  ->orWhere('role.role_name','like',$like);
            });
        })
        ->select('users.*','role.role_name')
        ->orderByDesc('users.id')
        ->paginate(15)
        ->withQueryString();

    return view('Dashboard.admin.users.index', compact('users','q'));
}
    public function add()
    {
    $roles = Role::all();
  return view("Dashboard.admin.users.add",compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'gender' => 'required|in:male,female,other',
            'city' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'role_id' => 'required|integer',
            'organization' => 'required|string|max:255',
            // 'profile_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120', // 5MB

        ]);

        // ✅ Handle Profile Image Upload with default fallback
        $path = 'assets/profile_images/default.png'; // <-- Default Image Path

        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/profile_images'), $filename);
            $path = 'assets/profile_images/' . $filename;
        }

        // ✅ Create New User
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            'role_id' => $request->role_id,
            'organization' => $request->organization,
            'profile_img' => $path,
        ]);

        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User added successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all(); // Fetch all roles
        return view("Dashboard.admin.users.edit", compact('user', 'roles'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'gender' => 'required|in:male,female,other',
            'city' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'role_id' => 'required|integer',
            'organization' => 'required|string|max:255',
            // 'profile_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120', // 5MB

        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // ✅ Yeh naya code yahin paste hoga
        if ($request->hasFile('profile_img')) {
            $file = $request->file('profile_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/profile_images'), $filename);
            $user->profile_img = 'assets/profile_images/' . $filename;
        }

        // ✅ Normal fields update
        $user->fill($request->except(['password', 'profile_img']));
        $user->save();

        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route("Dashboard.admin.users.index")->with('success', 'User deleted successfully!');
    }


    public function view($id)
{
    $user = User::with('role')->findOrFail($id);
    return view('Dashboard.admin.users.view', compact('user'));
}

}
