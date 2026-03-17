<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

   @if($user)
    <p>Editing details for user with id: {{ $user->id }}</p>

    <div class="container mt-5">
        <h1>Edit User Details</h1>

        <p>
            This page is for editing user details using Controller Methods 
            and Routes in web.php.
        </p>

        <form action="{{ route('usermanips.update', $user->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button> 
            &nbsp;&nbsp;
            <a href="{{ route('usermanips.index') }}" class="btn btn-secondary">Back to User Manipulations</a>
            
        </form>
    </div>

@else
    <p>
        Invalid user. Please go back to 
        <a href="{{ route('usermanips.index') }}">User Manipulations</a>.
    </p>
@endif

</body>
</html>