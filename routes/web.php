<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $works = config('portfolio.works');
    $visibleWorks = array_slice($works, 0, 5);

    return view('home', [
        'works' => $visibleWorks,
        'totalWorks' => count($works),
    ]);
})->name('home');

Route::get('/work', function () {
    return view('work', [
        'works' => config('portfolio.works'),
    ]);
})->name('work');

Route::get('/map', function () {
    return view('map');
})->name('map');