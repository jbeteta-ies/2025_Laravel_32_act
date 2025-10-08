<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');

