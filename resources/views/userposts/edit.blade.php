@extends('../layouts/index_default')

@section('laraheader')
    <h1 class="my-4">EDIT POST
    </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div> <h2>EDIT POST</h2></div>
    <div>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="hashtags">Hashtags</label>
                <textarea class="form-control" id="hashtags" name="hashtags" rows="5" required>{{ $post->hashtags }}</textarea>
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

