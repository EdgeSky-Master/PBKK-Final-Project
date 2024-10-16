<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['name' => 'Fawwaz Abdulloh Al-Jawi']);
});

Route::get('/posts', function () {
    //$post = Post::with(['category','author'])->latest()->get();
    // $posts = Post::latest();
    // if(request('search')){
    //     $posts->where('title', 'like', '%' . request('search') . '%');
    // }
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(5)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    //$posts = $user->posts->load('category','author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts', ['title' => count($category->posts) . ' Articles on the topic ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact'], ['name' => 'Fawwaz Abdulloh Al-Jawi'], ['email' => 'faaljawi04@gmail.com']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::post('loginAction', [AuthController::class, 'loginAction'])->name('loginAction');
// Route::get('logoutAction', [AuthController::class, 'logoutAction'])->name('logoutAction')->middleware('auth');

// Route::get('/registration', [RegisterController::class, 'registration'])->name('registration');
// Route::post('registration', [RegisterController::class, 'registration'])->name('registration');