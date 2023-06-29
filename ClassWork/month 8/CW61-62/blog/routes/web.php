<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/register', [\App\Http\Controllers\UserController::class, 'register'])->name('users.register');
Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::get('/login', [\App\Http\Controllers\SessionController::class, 'create'])->name('sessions.login');
Route::post('/login', [\App\Http\Controllers\SessionController::class, 'store'])->name('sessions.store');
Route::delete('/logout', [\App\Http\Controllers\SessionController::class, 'destroy'])->name('sessions.logout');
