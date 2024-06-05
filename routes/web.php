<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/payment', [App\Http\Controllers\paymentController::class, 'payment'])->name('admin.payment');
Route::get('/items', [App\Http\Controllers\paymentController::class, 'items'])->name('admin.items');
