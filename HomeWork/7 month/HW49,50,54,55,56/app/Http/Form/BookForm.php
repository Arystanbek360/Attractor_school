<?php

namespace App\Http\Form;


use App\Models\Book;
use Illuminate\Http\Request;

class BookForm extends Form
{
    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        $data = $request->all();
        $file = $request->file('picture');

        if ($file) {
            $data['picture'] = $file->store('pictures', 'public');
        }

        return Book::create($data);
    }
}
