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
        <p> In the Models/ModelName, create columns which user can interact with, 
            using: protected $fillable = ['columnname','columnname']; </p>
        <p> THE CONTROLLER HAS ACCESS TO THE MODELS.</p>
        <p> The next step is, GO TO MIGRATIONS, ADD COLUMNS TO THE TABLES, THEN: </p>
        <p> php artisan migrate </p>
        <p> If you made a mistake, you can rollback with: php artisan migrate:rollback </p>
        <p> To roll back a specific migration from a many previous migrations, 
            you can use: php artisan migrate:rollback --path=database/migrations/database/migrations/2026_01_22_132352_create_posts_table.php </p>
        </p>
        <p> To rerun all migrations, use php artisan migrate:refresh </p>
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('larafooter')
    <h3> Footer Section </h3>
@endsection