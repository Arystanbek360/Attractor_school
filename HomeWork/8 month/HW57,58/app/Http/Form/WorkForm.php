<?php

namespace App\Http\Form;


use App\Models\Work;
use Illuminate\Http\Request;

class WorkForm extends Form
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

        return Work::create($data);
    }
}
