<?php

use App\Http\Controllers\UserController;
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

Route::resource('/', UserController::class);
Route::get('{user}/show', [UserController::class, 'show'])->name('show');
Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
Route::put('/{user}/update', [UserController::class, 'update'])->name('update');
Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('destroy');

