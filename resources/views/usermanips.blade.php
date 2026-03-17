<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manipulations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <div class="container mt-5">
        <h1>User Manipulations</h1>
        <p>This page is for user manipulations and CRUD operations using Controller Methods 
            and Routes in web.php.</p>
        <p>
            Steps in this tutorial:
            <ol>
                <li>Create a controller</li>
                <li>Use artisan tinker to create dummy data. php artisan tinker. Then User::factory()->count(50)->create()</li>
                <li>Define routes in web.php</li>
                <li>Create a foreach loop to display user data from db</li>
                <li>Use blade directives to create links for edit and delete operations</li>
                <li>Use jQuery to create a confirm before delete dialog</li>
                <li>Use controller methods to handle edit and delete operations</li>
            </ol>
        </p>

        <h2>Users List</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('usermanips.edit', $user->id) }}" class="btn btn-primary">Edit</a> 
                    &nbsp;
                    <form action="{{ route('usermanips.destroy', $user->id) }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
                   
        

    </div>
</body>
</html>