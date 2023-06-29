<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Form\BookForm;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class BooksController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.books.create', compact('authors', 'genres'));
    }

    /**
     * @param BookRequest $request
     * @return RedirectResponse
     */
    public function store(BookRequest $request): RedirectResponse
    {
        $book = BookForm::execute($request);
        $genres = $request->input('genre');
        $book->genres()->sync($genres);

        return redirect()
            ->route('admin.books.index')
            ->with('status', "{$book->title} successfully created!");
    }

    /**
     * @param Book $book
     * @return View
     */
    public function show(Book $book): View
    {
        return view('admin.books.show', compact('book'));
    }

    /**
     * @param Book $book
     * @return View
     */
    public function edit(Book $book): View
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('admin.books.edit', compact(['book', 'authors', 'genres']));
    }

    /**
     * @param BookRequest $request
     * @param Book $book
     * @return RedirectResponse
     */
    public function update(BookRequest $request, Book $book): RedirectResponse
    {
        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $genres = $request->input('genre');
        $book->genres()->sync($genres);

        $book->update($data);

        return redirect()
            ->route('admin.books.show', ['book' => $book])
            ->with('status', "Product {$book->title} successfully updated!");
    }

    /**
     * @param Book $book
     * @return RedirectResponse
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('admin.books.index')->with('status', $book->title . ' successfully deleted!');
    }
}
