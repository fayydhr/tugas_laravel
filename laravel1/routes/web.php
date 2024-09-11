<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home' , ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about' , ['title' => 'about']);
});

Route::get('/blog', function () {
    return view('blog' , ['title' => 'Blog']);
});

Route::get('/email', function () {
    return view('email');
});