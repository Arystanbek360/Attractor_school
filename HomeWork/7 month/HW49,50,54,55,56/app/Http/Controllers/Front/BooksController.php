<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BooksController extends Controller
{
    /**
     * @param Book $book
     * @return View
     */
    public function show(Book $book): View
    {
        return view('front.book.show', compact('book'));
    }
}
