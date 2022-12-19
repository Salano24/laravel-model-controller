<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
