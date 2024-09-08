<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/journey', function () {
    return view('journey');
})->name('journey');

Route::get('/plans', function () {
    return view('plans');
})->name('plans');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
