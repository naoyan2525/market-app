<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

Route::get('/', [ItemController::class, 'index']);

Route::get('/verify', function () {
    return view('auth.verify-email');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [UserController::class, 'index']);

    Route::get('/mypage/profile', [UserController::class, 'profile']);

    Route::post('/logout', function (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    });
});