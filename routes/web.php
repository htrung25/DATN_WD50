<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/search', function () {
    return view('user.search.search');
})->name('search');