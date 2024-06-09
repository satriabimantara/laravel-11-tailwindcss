<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// Route model binding
Route::get('/posts/{post:slug}', [PostController::class, 'detail']);
Route::get('/post-category/{post_category:slug}', [PostController::class, 'category_posts']);
Route::get('/authors/{user:username}', [PostController::class, 'user_posts']);
