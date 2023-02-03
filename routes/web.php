<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Risky",
        "email" => "rarmnsyah787@gmail.com",
        "title" => "About"
    ]);
});
// tambahan

Route::get('/form', function () {
    return view('form', [
        "title" => "Form"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'posts' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => $category->name,
        'posts' => $category->post->load('category', 'user')
    ]);
});

Route::get('users', function () {
    return view('posts', [
        'title' => 'User',
        'posts' => User::all()
    ]);
});

Route::get('/users/{user:id}', function (User $user) {
    return view('posts', [
        'title' => $user->name,
        'posts' => $user->post->load('category', 'user'),
    ]);
});
