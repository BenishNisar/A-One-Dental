@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    .profile-container {
        max-width: 900px;
        margin: auto;
        padding: 30px;
        background: #fff;
        border: 1px solid #a41414;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.07);
        font-family: 'Poppins', sans-serif;
        margin-top: 50px;
    }

    .profile-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-header img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #f0f0f0;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .profile-header h2 {
        margin-top: 15px;
        font-size: 24px;
        font-weight: 600;
    }

    .profile-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;

    }

    .profile-card {
        padding: 20px;
        background-color: #f9fafb;
        border-radius: 16px;
        border: 1px solid #eee;
        transition: 0.3s ease;
    }

    .profile-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transform: scale(1.01);
    }

    .profile-label {
        font-weight: 600;
        font-size: 14px;
        color: #555;
        margin-bottom: 5px;
    }

    .profile-value {
    font-size: 16px;
    color: #333;
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}


    @media (max-width: 576px) {
        .profile-header h2 {
            font-size: 20px;
        }
    }
</style>

<div class="profile-container">
    <div class="profile-header">
        @if(auth()->user()->profile_img)
            <img src="{{ asset(auth()->user()->profile_img) }}" alt="Profile Image">
        @else
            <img src="{{ asset('Dashboard_assets/img/default-user.png') }}" alt="No Image">
        @endif
        <h2>{{ auth()->user()->firstname }}</h2>
    </div>

    <div class="profile-grid">
        <div class="profile-card">
            <div class="profile-label">Email</div>
            <div class="profile-value text-break">{{ auth()->user()->email }}</div>

        </div>
        <div class="profile-card">
            <div class="profile-label">Gender</div>
            <div class="profile-value text-capitalize">{{ auth()->user()->gender }}</div>
        </div>
        <div class="profile-card">
            <div class="profile-label">Country</div>
            <div class="profile-value">{{ auth()->user()->country }}</div>
        </div>
        <div class="profile-card">
            <div class="profile-label">City</div>
            <div class="profile-value">{{ auth()->user()->city }}</div>
        </div>
        <div class="profile-card">
            <div class="profile-label">Zip Code</div>
            <div class="profile-value">{{ auth()->user()->zip_code }}</div>
        </div>
        <div class="profile-card">
            <div class="profile-label">Organization</div>
            <div class="profile-value">{{ auth()->user()->organization }}</div>
        </div>
    </div>
</div>

@endsection
