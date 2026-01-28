@extends('../layouts/index_default')

@section('laraheader')
    <h2>CRUD SYSTEM FOR CREATING USER PROFILES!</h2>
@endsection

@section('laracontent')
    <a href="/user_profiles/create" class="btn btn-primary">Create New User Profile</a>
    <h3>Our Current User Profiles</h3><hr />

    

@endsection

@section('larafooter')
    <p>&copy; 2024 User Profiles App</p>
@endsection
