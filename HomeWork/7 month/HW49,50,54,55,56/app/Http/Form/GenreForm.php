<?php

namespace App\Http\Form;


use App\Models\Genre;
use Illuminate\Http\Request;

class GenreForm extends Form
{
    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        return Genre::create($request->all());
    }
}
