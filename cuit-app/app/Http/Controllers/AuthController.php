<?php

namespace App\Http\Controllers;

use App\Models\User;


use Illuminate\Http\Request;

use Iluminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse as HttpRedirectResponse;


class AuthController extends Controller
{
    public function register(Request $request): HttpRedirectResponse
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('login');
    }

    public function login(Request $request): HttpRedirectResponse
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            $user = User::where(['email' => $request->email])->first();
            Auth::login($user);
            return redirect('/');
        }

        return redirect('login')->with('error', 'Email / password salah');
    }

    public function logout(Request $request): HttpRedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
