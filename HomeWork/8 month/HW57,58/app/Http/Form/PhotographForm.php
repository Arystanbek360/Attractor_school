<?php

namespace App\Http\Form;


use App\Models\Book;
use App\Models\Photograph;
use Illuminate\Http\Request;

class PhotographForm extends Form
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
            $data['picture'] = $file->store('picture', 'public');
        }

        return Photograph::create($data);
    }
}
