<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

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

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::get('/mypage', [UserController::class, 'index']);

Route::get('/', [ItemController::class, 'index']);