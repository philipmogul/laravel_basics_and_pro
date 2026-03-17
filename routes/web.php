<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Http\Controllers\CrudSystemController;
use App\Http\Controllers\UserLoginsAppController;
use App\Http\Controllers\userManips;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

#  Posts Resource Routes
Route::resource('/posts', PostsController::class);

// User-login-app index 
Route::resource('/user-login-app', UserLoginsAppController::class);

// Route for userManips
Route::get('/usermanips', [userManips::class, 'index'])->name('usermanips.index');
Route::get('/edituser/{id}', [userManips::class, 'edit'])->name('usermanips.edit');
Route::put('/updateuser/{id}', [userManips::class, 'update'])->name('usermanips.update');
Route::delete('/deleteuser/{id}', [userManips::class, 'destroy'])->name('usermanips.destroy');


require __DIR__.'/auth.php';
