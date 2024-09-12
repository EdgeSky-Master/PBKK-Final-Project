<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fawwaz Abdulloh Al-Jawi'] );
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'Fawwaz Abdulloh Al-Jawi'], ['email' => 'faaljawi04@gmail.com']);
});