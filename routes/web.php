<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    auth()->loginUsingId(1);
    return view('welcome');
});

// for routes in admin ================================================
include_once 'admin.php';

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
