<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;

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

Route::get('/form', function () {
    return view('form', [
        "title" => "Form"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Post",
        "posts" => post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {

    // $posts = post::all();
    // $new_post = [];

    // foreach ($posts as $post) {
    //     if ($post["slug"] === $slug) {
    //         $new_post = $post;
    //     }
    // }

    return view('post', [
        "title" => "Single Post",
        "post" => post::find($slug)
    ]);
});
