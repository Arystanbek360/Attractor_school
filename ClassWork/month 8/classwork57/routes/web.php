<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\ArticlesController::class, 'index'])
    ->name('dashboard');

Route::resource('articles', \App\Http\Controllers\ArticlesController::class)
    ->only(['index', 'show', 'create', 'store', 'edit']);
Route::resource('articles.comments', \App\Http\Controllers\CommentsController::class)
    ->only(['store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
//    'register' => false,
//    'login'    => false
]);

Route::get('/article/{article}/create', function (\App\Models\Article $article) {
    dump('Access successful');
    return view('articles.show', compact('article'));
})->middleware('can:create,\App\Models\Article');

Route::get('/some/{article}', [\App\Http\Controllers\ArticlesController::class, 'some']);

Route::get('/test', function () {
//    /** @var \App\Models\Article $item */
//    $item = \App\Models\Article::find(1);
//    dump($item->comments);
//    dump(
//        $item->comments()->where('author', 'Like', '%min%')->get()
//    );
    dump(
        \App\Models\User::find(1)
            ->roles()
            ->withPivot('id')
//            ->wherePivotNotNull('created_at')
//            ->where('name', 'LIKE', '%мин%')
            ->orderBy('name')
            ->get()
            ->toArray()
    );
});
