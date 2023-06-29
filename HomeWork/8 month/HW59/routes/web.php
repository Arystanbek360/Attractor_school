<?php

use App\Http\Controllers\Admin\UserIsAdminController;
use App\Http\Controllers\Front\CommentsController;
use App\Http\Controllers\Front\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'checkIsActive'])->group(function () {
    Route::resource('posts', PostController::class)->only('store', 'create', 'index', 'show');
    Route::resource('comments', CommentsController::class)->only('store', 'destroy');
});

Route::middleware(['auth', 'checkIsAdmin'])->group(function () {
    Route::resource('admin', UserIsAdminController::class)->only('index');
    Route::get('/admin/{user}/active', [UserIsAdminController::class, 'switchActive'])->name('switchActive');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cantShow', function () {
    return view('front.notActive');
})->name('notActive');
