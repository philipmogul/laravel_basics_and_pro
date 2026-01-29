@extends('../layouts/index_default')

@section('laraheader')
    <h2>CRUD SYSTEM FOR CREATING USER PROFILES!</h2>
@endsection

@section('laracontent')
    <a href="/user_profiles/create" class="btn btn-primary">Create New User Profile</a>
    <h3>Our Current User Profiles</h3><hr />
    @foreach($user_profiles as $user_profile)
        <div class="user-profile">
            <h4>{{ $user_profile->name }}</h4>
            <p>Email: {{ $user_profile->email }}</p>
            <p>Bio: {{ $user_profile->bio }}</p>
            <a href="/user_profiles/{{ $user_profile->id }}/edit" class="btn btn-secondary">Edit</a>
            <form action="/user_profiles/{{ $user_profile->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <hr />
    @endforeach
@endsection

@section('larafooter')
    <p>&copy; 2024 User Profiles App</p>
@endsection
