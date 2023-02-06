<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Risky",
        "email" => "rarmnsyah787@gmail.com",
        'active' => 'about',
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
        'active' => 'category',
        'categories' => Category::all()
    ]);
});

Route::get('users', function () {
    return view('users', [
        'title' => 'User',
        'users' => User::all(),
        'active' => 'user',
    ]);
});

Route::get('login', function () {
    return view('login', [
        'users' => User::all()
    ]);
});
