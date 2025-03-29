<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.sign-in');
})->name('login');

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');
