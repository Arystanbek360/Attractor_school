<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\Front\AuthorsController;
use App\Http\Controllers\Front\BooksController;
use App\Http\Controllers\Front\GenresController;
use App\Http\Controllers\Admin\AuthorsController as AdminAuthorsController;
use App\Http\Controllers\Admin\GenresController as AdminGenresController;
use App\Http\Controllers\Admin\BooksController as AdminBooksController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [GenresController::class, 'index'])->name('home');
    Route::resource('genres', GenresController::class)
        ->only(['index', 'show']);
    Route::resource('authors', AuthorsController::class)
        ->only(['show']);
    Route::resource('books', BooksController::class)
        ->only(['show']);
    Route::post('/books/{book}/comments', [CommentsController::class, 'store'])->name('books.comment.add');
    Route::get('/comments/{comment}/edit', [CommentsController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{comment}', [CommentsController::class, 'update'])->name('comments.update');
    Route::delete('/books/comments/{comment}', [CommentsController::class, 'delete'])->name('comments.delete');
});

Route::middleware(['auth.basic', 'auth'])->group(function () {
    Route::prefix('admin')
        ->name('admin.')
        ->middleware('auth.basic.once')
        ->group(function () {
            Route::resources([
                'authors' => AdminAuthorsController::class,
                'genres' => AdminGenresController::class,
                'books' => AdminBooksController::class
            ]);
            Route::get('/', [AdminPagesController::class, 'index'])->name('dashboard');
        });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
