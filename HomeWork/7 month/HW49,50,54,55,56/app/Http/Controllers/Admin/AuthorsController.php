<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\AuthorForm;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AuthorsController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $authors = Author::all();
        return view('admin.authors.index', compact('authors'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.authors.create');
    }

    /**
     * @param AuthorRequest $request
     * @return RedirectResponse
     */
    public function store(AuthorRequest $request): RedirectResponse
    {
        $author = AuthorForm::execute($request);

        return redirect()
            ->route('admin.authors.index')
            ->with('status', $author->name . ' успешно создан!');
    }

    /**
     * @param Author $author
     * @return View
     */
    public function show(Author $author): View
    {
        return view('admin.authors.show', compact('author'));
    }

    /**
     * @param Author $author
     * @return View
     */
    public function edit(Author $author): View
    {
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * @param AuthorRequest $request
     * @param Author $author
     * @return RedirectResponse
     */
    public function update(AuthorRequest $request, Author $author): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $author->update($data);
        return redirect()
            ->route('admin.authors.show', ['author' => $author])
            ->with('status', $author->name . " успешно изменен!");
    }

    /**
     * @param Author $author
     * @return RedirectResponse
     */
    public function destroy(Author $author): RedirectResponse
    {
        $author->delete();

        return redirect()
            ->route('admin.authors.index')
            ->with('status', $author->name . " успешно удален!");
    }
}
