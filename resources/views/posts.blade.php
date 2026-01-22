@extends('./layouts.index_default')

@section('laraheader')
    <h1> Posts Page </h1>
@endsection

@section('laracontent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="container">
                    <div class="row">Posts</div>
                    <div> <h2>Posts Content</h2></div>
    <div>
        <p>I have created the posts using models!</p>
        <p>I have used: php artisan make:model Posts -mcr </p>
        <p>MODELS ARE USUALLY USED FOR INTERACTING WITH THE DATABASE.</p>
        <p> THE CONTROLLER HAS ACCESS TO THE MODELS.</p>
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('larafooter')
    <h3> Footer Section </h3>
@endsection