<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
//    /** @var \Illuminate\Database\Eloquent\Collection $users */
//    $users = User::where('active', 1)->get();
    $post = Post::first();
    $options = $post->options;
    $options['key'] = 'Some value';
    $options['value'] = 'Some value too';
    $post->options = $options;
    $post->save();

    dump($post->toArray());

//    $users = $users->f(User::whereIn('id', [1, 2, 3])->get());
//    $users = $users->except([2, 3]);

//    $user = $users->find(2);
//    $users = $users->fresh('comments');
//    $users = $users->load('comments');
//    $users = $users->loadMissing('posts');
//    $users = $users->intersect(User::whereIn('id', [1, 2, 3, 6, 7])->get());
//    $users = $users->makeVisible(['password']);
//    $users = $users->makeHidden(['address']);
//    $users = $users->only([1, 2, 3]);
//    $users = $users->unique([1, 2, 3]);

//    dump(
//        $users->toQuery()
//            ->whereIn('phone_number', ['+12282908386', '+15755253079', '+12095150332'])
//            ->pluck('id')
//            ->toArray()
//    );
//    $users
//        ->toQuery()
//        ->whereIn('phone_number', ['+12282908386', '+15755253079', '+12095150332'])
//        ->update(['active' => false]);

//    $users = $users->fresh();
//    dump($users->toArray());
//    dump($users->pluck('active')->toArray());

//    dump($users->contains(10));
//    dump($users->contains(User::first()));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
