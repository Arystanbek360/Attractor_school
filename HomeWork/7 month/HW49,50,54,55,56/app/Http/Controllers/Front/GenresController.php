<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\View\View;

class GenresController extends Controller
{
    /**
     * @return view
     */
    public function index(): View
    {
        $books = Book::orderByDesc('sales')->take(10)->get();
        $genres = Genre::all();
        return view('front.genre.index', compact('genres', 'books'));
    }

    /**
     * @param Genre $genre
     * @return View
     */
    public function show(Genre $genre): View
    {
        return view('front.genre.show', compact('genre'));
    }
}
