<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user){
    return view('post', ['title' => 'Articel by'. $user->name, 'posts' => $user->posts]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);

    // routes/web.php
Route::get('/author/{id}', [PostController::class, 'postsByAuthor']);

});

