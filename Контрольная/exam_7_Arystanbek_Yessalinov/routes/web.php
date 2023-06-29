<?php

use App\Http\Controllers\Admin\AdminPagesController;

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\Admin\CabinetsController as AdminCabinetsController;
use App\Http\Controllers\Admin\ItemsController as AdminItemsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::resources([
            'items' => AdminItemsController::class,
            'cabinets' => AdminCabinetsController::class
        ]);
        Route::get('/', [AdminPagesController::class, 'index'])->name('dashboard');
        Route::post('/{cabinet}/comments/', [CommentsController::class, 'store'])->name(
            'cabinets.comment.add'
        );
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
