<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        };

        if (request('user')) {
            $user = User::firstWhere('username', request('user'))->name;
            $title = ' by ' . $user;
        };


        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post,
        ]);
    }
}
