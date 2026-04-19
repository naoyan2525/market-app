<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller

{
    public function register() // 登録画面
    {
        return view('auth.register');
    }

    public function store() // 登録処理
    {
        //
    }

    public function login() // ログイン画面
    {
        return view('auth.login');
    }

    public function loginProcess() // ログイン処理
    {
        //
    }

    public function logout() // ログアウト
    {
        //
    }
}
