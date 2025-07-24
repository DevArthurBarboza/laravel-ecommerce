<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, 'renderAll'])->name('getProducts');
Route::get('/product/{product}', [ProductController::class, 'getById'])->name('getProductById');

Route::get('/categories', [CategoryController::class, 'get'])->name('getCategories');
Route::get('/category/{id}', [CategoryController::class, 'getById'])->name('getCategoryById');
