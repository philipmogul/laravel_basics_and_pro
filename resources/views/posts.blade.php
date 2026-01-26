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
        <p> php artisan migrate </p>
        <p> If you made a mistake, you can rollback with: php artisan migrate:rollback </p>
        <p> To roll back a specific migration from a many previous migrations, 
            you can use: php artisan migrate:rollback --path=database/migrations/database/migrations/2026_01_22_132352_create_posts_table.php </p>
        </p>
        <p> To rerun all migrations, use php artisan migrate:refresh </p>
        <p> Pre inserting to db, go to Models and include columns from migrations 
            to be inserted: e.g. 
            protected $fillable = [
                'title',
                'content',
                'hashtags',
            ]; 
        </p>
    </div>
                </div>
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <h3> Posts List </h3>
                    <?php /*@foreach($posts as $post)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                            </div>
                        </div>
                    @endforeach */ ?>
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection


@section('larafooter')
    <h3> Footer Section </h3>
@endsection