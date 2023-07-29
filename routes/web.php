<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/show/{slug}', [\App\Http\Controllers\PostController::class, 'show']);
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
