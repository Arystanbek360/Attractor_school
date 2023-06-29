<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\GenreForm;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class GenresController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $genres = Genre::all();
        return view('admin.genres.index', compact('genres'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.genres.create');
    }

    /**
     * @param GenreRequest $request
     * @return RedirectResponse
     */
    public function store(GenreRequest $request): RedirectResponse
    {
        $genre = GenreForm::execute($request);

        return redirect()
            ->route('admin.genres.index')
            ->with('status', "{$genre->name} успешно создан!");
    }

    /**
     * @param Genre $genre
     * @return View
     */
    public function show(Genre $genre): View
    {
        return view('admin.genres.show', compact('genre'));
    }

    /**
     * @param Genre $genre
     * @return View
     */
    public function edit(Genre $genre): View
    {
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * @param GenreRequest $request
     * @param Genre $genre
     * @return RedirectResponse
     */
    public function update(GenreRequest $request, Genre $genre): RedirectResponse
    {
        $genre->update($request->all());

        return redirect()
            ->route('admin.genres.show', ['genre' => $genre])
            ->with('status', "Жанр {$genre->name} успешно обновлен!");
    }

    /**
     * @param Genre $genre
     * @return RedirectResponse
     */
    public function destroy(Genre $genre): RedirectResponse
    {
        $genre->delete();
        return redirect()->route('admin.genres.index')->with('status', $genre->name . ' успешно удален!');
    }
}
