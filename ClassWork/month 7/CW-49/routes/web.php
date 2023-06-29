<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Frontend\CategoriesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\Admin\ProductsController as AdminProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'index'])->name('home');

Route::resource('products', ProductsController::class)
    ->except(['create', 'store', 'update', 'edit', 'destroy']);
Route::resource('categories', CategoriesController::class)
    ->only(['index']);

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth.basic.once')
    ->group(function () {
        Route::resources([
            'products' => AdminProductsController::class,
            'categories' => AdminCategoriesController::class
        ]);
        Route::get('/', [AdminPagesController::class, 'index'])->name('dashboard');
    });
