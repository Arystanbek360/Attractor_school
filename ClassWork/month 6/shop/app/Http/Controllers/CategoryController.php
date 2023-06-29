<?php

namespace App\Http\Controllers;

use App\Http\Form\CategoryForm;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): view
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): view
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $category = CategoryForm::execute($request);

        return redirect()
            ->route('categories.index')
            ->with('status', $category->name . 'successfully created');
    }


    /**
     * @param Category $category
     * @return View
     */
    public function show(Category $category): view
    {
        return view('categories.show', compact('category'));
    }

    /**
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): view
    {
        return view('categories.edit', compact('category'));
    }


    /**
     * @param CategoryRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->all());
        return redirect()
            ->route('categories.index')
            ->with('status', $category->name . "successfully updated");
    }


    /**
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('status', $category->name . "successfully deleted");
    }
}
