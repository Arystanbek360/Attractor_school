<?php

use App\Http\Controllers\Admin\AdminPagesController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\InstitutionsController;
use App\Http\Controllers\Admin\InstitutionsController as AdminInstitutionsController;
use App\Http\Controllers\Admin\DishesController as AdminDishesController;
use App\Models\Dish;
use App\Models\Institution;
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

Route::resource('/institutions', InstitutionsController::class)->only(['index', 'show']);
Route::get('/institutions/category/{category}', function ($category) {
    $institutions = Institution::where('category_id', $category)->paginate(5);
    return view('front.index', ['institutions' => $institutions]);
})->name('category');

Route::get('/institutions/type/{kitchen}', function ($kitchen) {
    $institutions = Institution::whereHas('dishes', function ($query) use ($kitchen) {
        $query->where('kitchen_id', $kitchen);
    })->with([
        'dishes' => function ($query) use ($kitchen) {
            $query->where('kitchen_id', $kitchen);
        }
    ])->paginate(5);
    return view('front.index', ['institutions' => $institutions]);
})->name('institutions.type');

Route::post('/cart/add', [CartController::class, 'addDishToCart'])->name('cart.addDishToCart');
Route::get('/dishes/{dish}/name', [CartController::class, 'getName']);
Route::get('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clearCart']);


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'checkIsAdmin'])
    ->group(function () {
        Route::resources([
            'institutions' => AdminInstitutionsController::class,
            'dishes' => AdminDishesController::class
        ]);
        Route::get('/', [AdminPagesController::class, 'index'])->name('dashboard');
        Route::get('{institution}/dishes/create', [AdminDishesController::class, 'create'])->name('dishes.create');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [InstitutionsController::class, 'index']);
