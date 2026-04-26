<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {
        //
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'ログイン情報が登録されていません',
    ])->withInput();
}
  
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}
