<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
