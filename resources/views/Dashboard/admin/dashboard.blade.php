
@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    .body{
        font-family: poppins;
    }
    .dashboard-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        padding: 20px;
        transition: transform 0.3s ease;
        height: 100%;

    }

    .dashboard-card:hover {
        transform: translateY(-5px);
    }

    .dashboard-icon {
        font-size: 32px;
        color: #b10937;
        margin-bottom: 10px;
    }

    .dashboard-title {
        font-family: poppins;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }

    .dashboard-count {
        font-family: poppins;
        font-size: 22px;
        font-weight: bold;
        color: #000;
    }
</style>

<div class="container mt-4">
    <h1 style="font-size: 24px; font-weight:bold; font-family: Poppins;">
        Welcome {{ auth()->user()->firstname ?? 'User' }}
    </h1>


    <p style="font-family:poppins;" class="text-muted">Quick access to your admin tools</p>

    <div class="row g-4 mt-3">
        <div class="col-md-4 col-sm-6">
            <div class="dashboard-card text-center">
                <div class="dashboard-icon"><i class="fas fa-users"></i></div>
                <div class="dashboard-title">Users</div>
                <div class="dashboard-count">{{ \App\Models\User::count() }}</div>
                <a href="{{ url('users') }}" class="btn btn-sm btn-outline-dark mt-2">Manage Users</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="dashboard-card text-center">
                <div class="dashboard-icon"><i class="fas fa-user-shield"></i></div>
                <div class="dashboard-title">Roles</div>
                <div class="dashboard-count">{{ \App\Models\Role::count() }}</div>
                <a href="{{ url('roles') }}" class="btn btn-sm btn-outline-dark mt-2">Manage Roles</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="dashboard-card text-center">
                <div class="dashboard-icon"><i class="fas fa-blog"></i></div>
                <div class="dashboard-title">Blogs</div>
                <div class="dashboard-count">{{ \App\Models\Blog::count() }}</div>
                <a href="{{ url('blog') }}" class="btn btn-sm btn-outline-dark mt-2">Manage Blogs</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="dashboard-card text-center">
                <div class="dashboard-icon"><i class="fas fa-tags"></i></div>
                <div class="dashboard-title">Categories</div>
                <div class="dashboard-count">{{ \App\Models\Category::count() }}</div>
                <a href="{{ url('category') }}" class="btn btn-sm btn-outline-dark mt-2">Manage Categories</a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="dashboard-card text-center">
                <div class="dashboard-icon"><i class="fas fa-envelope"></i></div>
                <div class="dashboard-title">Messages</div>
                <div class="dashboard-count">{{ \App\Models\Contact::count() }}</div>
                <a href="{{ url('contactus') }}" class="btn btn-sm btn-outline-dark mt-2">View Messages</a>
            </div>
        </div>
    </div>
</div>
@endsection
