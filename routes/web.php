<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first', [TestController::class, 'first']);

Route::get('/second', [TestController::class, 'second']);
