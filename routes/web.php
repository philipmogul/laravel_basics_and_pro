<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/posts', function () {
    return view('posts');
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
