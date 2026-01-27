@extends('../layouts/index_default')

@section('laraheader')
    <h1 class="my-4">User Posts
        <small>Recent Posts</small>
    </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">Create User Posts</div>
                    <div> <h2>Create User Posts Content</h2></div>
    <div>
        <p>This is the create user posts page.</p>
        <p>Here you can add a form to create new user posts.</p>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{old('content')}}</textarea>
            </div>
            <div class="form-group">
                <label for="hashtags">Hashtags</label>
                <textarea class="form-control" id="hashtags" name="hashtags" rows="5" required>{{old('hashtags')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('larafooter')
    <h3> Footer Section </h3>  
@endsection

