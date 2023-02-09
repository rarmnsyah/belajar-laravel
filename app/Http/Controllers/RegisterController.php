<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register Form',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'username' => 'required|min:3|max:255|unique:users',
            'email' => ['email', 'required'],
            'password' => ['required', 'min:8']
        ]);

        dd('dsf');
    }
}
