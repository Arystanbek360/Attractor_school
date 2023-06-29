<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CategoriesController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): View
    {
        $categories = Category::all();

        return view('front.categories.index', compact('categories'));
    }
}
