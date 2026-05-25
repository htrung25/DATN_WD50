<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/trips/search', function () {
    return view('user.trips.search');
})->name('search');
Route::get('/trips/seatpicker', function () {
    return view('user.trips.seatpicker');
})->name('seatpicker');