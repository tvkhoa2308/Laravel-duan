<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckAdmin;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
//BACKEND
Route::prefix('admin')->group(function () {
    Route::get('/dashboard' , [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('admin');
    Route::get('/login', [AuthController::class, 'index'])->name('index')->middleware('index');
    Route::post('/postLogin', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/users/index', [UserController::class, 'index'])->name('users.index')->middleware('admin');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');




});
