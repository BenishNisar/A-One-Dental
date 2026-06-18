<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\Category; // 👈 add this
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DownloadController extends Controller
{

 public function index(Request $request)
{
    $q = $request->get('q');
    $categoryIds = (array) $request->get('category_ids'); // multi filter

    $downloads = Download::with('categories')
        ->when($q, function ($qr) use ($q) {
            $qr->where(function ($w) use ($q) {
                $w->where('title','like',"%{$q}%")
                  ->orWhere('year_label','like',"%{$q}%");
            });
        })
        ->when(!empty($categoryIds), function ($qr) use ($categoryIds) {
            $qr->whereHas('categories', fn($q) => $q->whereIn('category_id', $categoryIds));
        })
        ->orderBy('id','asc')
        ->paginate(15)
        ->withQueryString();

    $categories = \App\Models\Category::orderBy('name','asc')->get();

    return view('Dashboard.admin.downloads-mgmt.index',
        compact('downloads','q','categoryIds','categories'));
}


public function add()
{
    $categories = Category::orderBy('name','asc')->get();
    $selectedCategoryIds = []; // <-- define empty
    return view('Dashboard.admin.downloads-mgmt.add', compact('categories','selectedCategoryIds'));
}


public function store(Request $request)
{
    $data = $request->validate([
        'title'          => 'required|string|max:255',
        'year_label'     => 'required|string|max:20',
        'category_ids'   => 'required|array|min:1',
        'category_ids.*' => 'exists:category,id',
        'file'           => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,csv,txt|max:20480',
    ]);

    $uploadPath = public_path('downloads');
    if (!File::exists($uploadPath)) {
        File::makeDirectory($uploadPath, 0755, true);
    }

    $file = $request->file('file');

    // ⬅️ meta BEFORE move
    $originalName = $file->getClientOriginalName();
    $mimeType     = $file->getClientMimeType();
    $sizeBytes    = $file->getSize();

    $ext  = $file->getClientOriginalExtension();
    $name = time().'_'.Str::slug(Str::limit($data['title'], 80, ''), '_').'.'.$ext;

    // move now
    $file->move($uploadPath, $name);

    // (optional) safety fallback if $sizeBytes null
    if (empty($sizeBytes)) {
        $sizeBytes = @filesize($uploadPath.DIRECTORY_SEPARATOR.$name) ?: null;
    }

    $download = Download::create([
        'title'         => $data['title'],
        'year_label'    => $data['year_label'],
        'file_path'     => 'downloads/'.$name,
        'original_name' => $originalName,
        'mime_type'     => $mimeType,
        'size_bytes'    => $sizeBytes,
    ]);

    $download->categories()->sync($data['category_ids']);

    return redirect()->route('Dashboard.admin.downloads-mgmt.index')
        ->with('success', 'Document uploaded.');
}


public function edit(Download $download)
{
    $categories = Category::orderBy('name','asc')->get();
    $selectedCategoryIds = $download->categories()->pluck('category_id')->toArray();
    return view('Dashboard.admin.downloads-mgmt.edit', compact('download','categories','selectedCategoryIds'));
}

public function update(Request $request, Download $download)
{
    $data = $request->validate([
        'title'          => 'required|string|max:255',
        'year_label'     => 'required|string|max:20',
        'category_ids'   => 'required|array|min:1',
        'category_ids.*' => 'exists:category,id',
        'file'           => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,csv,txt|max:20480',
    ]);

    $update = [
        'title'      => $data['title'],
        'year_label' => $data['year_label'],
    ];

    if ($request->hasFile('file')) {
        $uploadPath = public_path('downloads');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        $file = $request->file('file');

        // ⬅️ meta BEFORE move
        $originalName = $file->getClientOriginalName();
        $mimeType     = $file->getClientMimeType();
        $sizeBytes    = $file->getSize();

        $ext  = $file->getClientOriginalExtension();
        $name = time().'_'.Str::slug(Str::limit($data['title'], 80, ''), '_').'.'.$ext;

        // delete old
        if ($download->file_path && File::exists(public_path($download->file_path))) {
            File::delete(public_path($download->file_path));
        }

        // move now
        $file->move($uploadPath, $name);

        if (empty($sizeBytes)) {
            $sizeBytes = @filesize($uploadPath.DIRECTORY_SEPARATOR.$name) ?: null;
        }

        $update += [
            'file_path'     => 'downloads/'.$name,
            'original_name' => $originalName,
            'mime_type'     => $mimeType,
            'size_bytes'    => $sizeBytes,
        ];
    }

    $download->update($update);
    $download->categories()->sync($data['category_ids']);

    return redirect()->route('Dashboard.admin.downloads-mgmt.index')
        ->with('success', 'Document updated.');
}



    public function destroy(Download $download)
    {
        if ($download->file_path && File::exists(public_path($download->file_path))) {
            File::delete(public_path($download->file_path));
        }
        $download->delete();

        return back()->with('success','Document deleted.');
    }
}
