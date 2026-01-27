@extends('../layouts/index_default')

@section('laraheader')
    <h1 class="my-4">Users Recent Posts</h1>
@endsection

@section('laracontent')

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create New Post</a>
    <?php //Points to create method in controller which points to create view ?>

    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><strong>Hashtags:</strong> {{ $post->hashtags }}</p>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@section('larafooter')
    <h3> Footer Section </h3>  
@endsection

