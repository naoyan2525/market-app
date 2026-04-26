<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/verify', function () {
    return view('auth.verify-email');
});

Route::get('edit', function () {
    return view('mypage.edit');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login'); 
});

Route::get('/mypage', function () {
    return view('mypage.profile');
});