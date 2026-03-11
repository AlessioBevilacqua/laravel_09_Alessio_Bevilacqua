<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/form', [PublicController::class, 'form'])->name('form');

Route::get('/products', [ProductsController::class, 'productList'])->name('products');

Route::post('/submit-form', [ProductsController::class, 'submitForm'])->name('submit-form');
