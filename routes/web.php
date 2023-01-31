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
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->post,
        'category' => $category->name
    ]);
});

Route::get('users', function () {
    return view('users', [
        'title' => 'User',
        'users' => User::all()
    ]);
});

Route::get('/users/{user:id}', function (User $user) {
    return view('user', [
        'title' => $user->name,
        'posts' => $user->post,
        'user' => $user->name
    ]);
});
