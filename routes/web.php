<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page'] );
});

Route::get('/about', function () {
    return view('about', ['title' => 'about'], ['name' => 'Fawwaz Abdulloh Al-Jawi'] );
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact'], ['name' => 'Fawwaz Abdulloh Al-Jawi'], ['email' => 'faaljawi04@gmail.com']);
});