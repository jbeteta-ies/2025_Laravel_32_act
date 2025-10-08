<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;

Route::view('/', 'landing.index')->name('home');

