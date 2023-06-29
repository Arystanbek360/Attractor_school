<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\View\View;

class AuthorsController extends Controller
{
    /**
     * @param Author $author
     * @return View
     */
    public function show(Author $author): View
    {
        return view('front.author.show', compact( 'author'));
    }
}
