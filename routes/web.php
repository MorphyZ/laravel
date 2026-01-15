<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/first', [TestController::class, 'first']);

Route::get('/second', [TestController::class, 'second']);
