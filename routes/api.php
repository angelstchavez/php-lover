<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::post('/product', [ProductController::class, 'store']);

Route::put('/product/{id}', [ProductController::class, 'update']);

Route::delete('/product/{id}', [ProductController::class, 'destroy']);