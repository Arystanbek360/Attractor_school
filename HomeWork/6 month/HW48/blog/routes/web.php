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

Route::resource('/', UserController::class)->middleware('auth.basic.once');
Route::get('{user}/show', [UserController::class, 'show'])->name('show')->middleware('auth.basic.once');
Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit')->middleware('auth.basic.once');
Route::put('/{user}/update', [UserController::class, 'update'])->name('update')->middleware('auth.basic.once');
Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('destroy')->middleware('auth.basic.once');

