<?php

use App\Http\Controllers\PagesController;
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

Route::name('tasks.')
    ->prefix('/')
    ->group(function () {
        Route::get('/', [PagesController::class, 'index'])->name('index');
        Route::post('/', [PagesController::class, 'create'])->name('create');
        Route::get('/garbage', [PagesController::class, 'garbage'])->name('garbage');
        Route::get('/change/{id}', [PagesController::class, 'change'])->name('upgrade');
        Route::get('/{id}', [PagesController::class, 'delete'])->name('delete');
    });
