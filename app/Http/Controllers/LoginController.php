<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login Page',
            'active' => 'login'
        ]);
    }

    public function validation(Request $request)
    {
        $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::all();
        $searchUser = $user->where('email', $request['email']);

        if ($searchUser) {
            if ($searchUser[0]->email === $request['email'] && $searchUser[0]->password === $request['password']) {
                return view('login.success', [
                    'title' => 'success',
                    'active' => 'login'
                ]);
            }
        }

        // return $searchUser[0]->username;

        return dd('adfa');
    }
}
