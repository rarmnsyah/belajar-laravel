<?php

use App\Http\Controllers\DashboardController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Menggunakan route controller mungkin lebih disarankan karena dapat mendistribusikan tiap page secara lebih baik
// 1 controller biasanya mengekspresikan 1 folder
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
