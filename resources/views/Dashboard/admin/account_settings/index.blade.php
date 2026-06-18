@extends("Layout.layouttwo")
@section("AdminContent")

@php
    $user = auth()->user(); // Prevents repeated calls and null errors
@endphp

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .settings-container {
        max-width: 900px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .settings-heading {
        font-size: 26px;
        font-weight: 600;
        margin-bottom: 20px;
    }
    .settings-section {
        margin-bottom: 30px;
    }
    .form-group label {
        font-weight: 500;
        margin-bottom: 5px;
        display: block;
    }
    .form-control {
        border-radius: 8px;
        padding: 10px 15px;
        border: 1px solid #ccc;
        font-size: 15px;
    }
    .form-control:focus {
        outline: none;
        border-color: #1d3a7d ;
        box-shadow: 0 0 0 2px rgba(177, 9, 55, 0.1);
    }
    .text-danger {
        font-size: 13px;
        color: red;
        margin-top: 3px;
        display: block;
    }
    .btn-save {
        background-color: #b10937;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 6px;
        font-weight: 500;
        transition: 0.3s;
    }
    .btn-save:hover {
        background-color: #86092b;
    }
    .section-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
    }
</style>

<div class="settings-container mt-4">
    <div class="settings-heading">
        <i class="fas fa-user-cog me-2"></i>Account Settings
    </div>

    @if ($user)
    <form method="POST" action="{{ route('Dashboard.admin.account_settings.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Profile Information -->
        <div class="settings-section">
            <div class="section-title"><i class="fas fa-id-card me-2"></i>Profile Information</div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control" value="{{ old('firstname', $user->firstname) }}">
                    @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="{{ old('lastname', $user->lastname) }}">
                    @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" readonly>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Organization</label>
                    <input type="text" name="organization" class="form-control" value="{{ old('organization', $user->organization) }}">
                    @error('organization') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}">
                    @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Country</label>
                    <input type="text" name="country" class="form-control" value="{{ old('country', $user->country) }}">
                    @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Profile Image</label>
                    <input type="file" name="profile_img" class="form-control">
                    @error('profile_img') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Password Change -->
        <div class="settings-section">
            <div class="section-title"><i class="fas fa-lock me-2"></i>Change Password</div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-save">
                <i class="fas fa-save me-1"></i> Save Changes
            </button>
        </div>
    </form>
    @else
        <div class="alert alert-danger mt-3">Please login to access your account settings.</div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Thanks',
        text: '{{ session('success') }}',
        confirmButtonText: 'OK',
        confirmButtonColor: '#3085d6'
    });
</script>
@endif

@endsection
