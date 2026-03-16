### INSTALLING BREEZE ### DONE AT BEGINNING OF PROJECT 
composer require laravel/breeze --dev
php artisan breeze:install



### INSTALLING BOOST 
composer require laravel-frontend-presets/boost --dev
php artisan preset boost



### CRUD SYSTEM
1. php artisan make:model UserProfile -mcr
2. protected $table = 'user_profiles'; & protected $fillable = ['name', 'email', 'bio']; in app/Models/UserProfile.php
3. go to migrations and add columns for your table 
4. php artisan migrate
5. in web.php, import controller and add routes in routes/web.php: Route::resource('user_profiles', UserProfileController::class);
6. add code in app/Http/Controllers/UserProfileController.php, for opening views and CRUD operations
7. create views for user interface to be connected to the controller for CRUD operations 


### ANOTHER CRUD SYSTEM: LARAVEL CONFIRM BEFORE DELETE DIALOG APPLICATION 








