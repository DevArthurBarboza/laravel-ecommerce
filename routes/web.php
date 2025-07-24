<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/products', [ProductController::class, 'renderAll'])->name('renderProducts');
Route::get('/product/{product}', [ProductController::class, 'renderById'])->name('renderProductById');

Route::get('/categories', [CategoryController::class, 'renderAll'])->name('renderCategories');
Route::get('/category/{id}', [CategoryController::class, 'renderById'])->name('renderCategoryById');