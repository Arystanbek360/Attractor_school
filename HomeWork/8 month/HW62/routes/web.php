<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\SessionController;
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


Route::middleware('guest')->get('/', [HomeController::class, 'index'])->name('home');
Route::resource('notes', NotesController::class)->only(['index', 'store', 'destroy']);

Route::get('/users/register', [UserController::class, 'register'])->name('users.register');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/login', [SessionController::class, 'create'])->name('sessions.login');
Route::post('/login', [SessionController::class, 'store'])->name('sessions.store');
Route::delete('/logout', [SessionController::class, 'destroy'])->name('sessions.logout');
