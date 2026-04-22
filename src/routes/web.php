<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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