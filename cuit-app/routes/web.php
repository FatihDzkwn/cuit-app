<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::middleware('guest')->group(function (){
    Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::POST('/register', [AuthController::class, 'register']);
Route::POST('/login', [AuthController::class, 'login']);
});

Route::POST('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('guest');
