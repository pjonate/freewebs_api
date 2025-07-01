<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::post('/products', [ProductController::class, 'store']);
Route::post('/register', [AuthController::class, 'register']);