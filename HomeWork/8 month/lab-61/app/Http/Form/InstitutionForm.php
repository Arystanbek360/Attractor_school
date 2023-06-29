<?php

namespace App\Http\Form;


use App\Models\Cabinet;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionForm extends Form
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

        return Institution::create($data);
    }
}
