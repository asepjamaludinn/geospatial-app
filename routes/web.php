<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/map', [PageController::class, 'map'])->name('map');