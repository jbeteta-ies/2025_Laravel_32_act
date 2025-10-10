<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

 Route::get('/products', [ProductController::class, 'index'])->name('product.index');


