<?php

use Illuminate\Support\Facades\Route;
// include controllers to be referenced for post routes
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CrudSystemController;

Route::resource('posts', PostsController::class);
Route::resource('crud_system', CrudSystemController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/store', function () {
    return view('storeinventory');
});

Route::get('/diaryentries', function () {
    return view('diaryentries');
});

Route::get('/crud_system', function () {
    return view('crud_system');
});
