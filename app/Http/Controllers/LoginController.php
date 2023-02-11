<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login Page',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required|min:3',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

        // trying manually
        // $user = User::all();
        // $searchUser = $user->where('email', $request['email']);

        // if ($searchUser) {
        //     if ($searchUser[0]->email === $request['email'] && $searchUser[0]->password === Hash::make($request['password'])) {
        //         return view('login.success', [
        //             'title' => 'success',
        //             'active' => 'login'
        //         ]);
        //     }
        // }

        // return $searchUser[0]->username;

    }
}
