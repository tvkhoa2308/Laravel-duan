<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
//BACKEND
Route::prefix('admin')->group(function () {
    Route::get('/dashboard' , [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/login', [UserController::class, 'index'])->name('index')->middleware(CheckLogin::class);
    Route::post('/postLogin', [UserController::class, 'login'])->name('auth.login');



});
