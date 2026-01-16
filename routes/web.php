<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/first', [TestController::class, 'first']);

Route::get('/second', [TestController::class, 'second']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
