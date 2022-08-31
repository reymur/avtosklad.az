<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all-cars', [App\Http\Controllers\HomeController::class, 'allCars']);
Route::get('/buy-partials', [App\Http\Controllers\BuyPartialsController::class, 'buyPartials']);
