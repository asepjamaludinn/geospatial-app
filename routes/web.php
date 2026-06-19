<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/work', function () {
    return view('work');
})->name('work');