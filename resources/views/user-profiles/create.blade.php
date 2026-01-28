@extends('../layouts/index_default')

@section('laraheader')
    <h2>CREATE USER PROFILES!</h2>
@endsection

@section('laracontent')
    <a href="/user_profiles" class="btn btn-primary" >VIEW PROFILES</a>
    <h3>Create New User Profile Below:</h3><hr />

    <form action="/user_profiles" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="uname">Username:</label>
            <input type="text" class="form-control" id="uname" name="uname" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="web">Website:</label>
            <textarea class="form-control" id="web" name="web" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="loc">Location:</label>
            <textarea class="form-control" id="loc" name="loc" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create Profile</button>
    </form>
    

@endsection

@section('larafooter')
    <p>&copy; 2024 User Profiles App</p>
@endsection
