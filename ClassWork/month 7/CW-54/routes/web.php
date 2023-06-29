<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentsController;
use App\Models\Article;
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

Route::get('/', [ArticlesController::class, 'index'])->name('dashboard');

Route::resource('articles', ArticlesController::class)
    ->only(['index', 'show', 'create', 'store', 'edit']);
Route::resource('articles.comments', CommentsController::class)->only(['store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article/{article}/edit', function (Article $article) {
    dump('Access successful');
    return view('articles.show', compact('article'));
})->middleware('can:create,article');
