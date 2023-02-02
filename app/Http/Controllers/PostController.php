<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
