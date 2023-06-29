<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\WorksController;
use App\Http\Controllers\Front\FormController;
use App\Http\Controllers\Front\PhotographsController;
use App\Http\Controllers\Admin\PhotographsController as AdminPhotographsController;
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

Route::get('/', [PhotographsController::class, 'index'])->name('home');
Route::get('/about', [PhotographsController::class, 'about'])->name('front.about');
Route::post('/form', [FormController::class, 'store'])->name('front.form');

Route::resource('photographs', PhotographsController::class)
    ->only(['show']);


Route::middleware('auth')->group(function () {
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::resources([
                'photographs' => AdminPhotographsController::class,
            ]);
            Route::resource('works', WorksController::class)->except('index');
            Route::resource('company', CompanyController::class)->only(['index', 'edit', 'update']);
            Route::get('/works/{photograph}/create', [WorksController::class, 'create'])->name('work.create');
            Route::get('/{user}', [AdminPagesController::class, 'index'])->name('dashboard');
        });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('AuthIn');
