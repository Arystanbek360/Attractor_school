<?php

namespace App\Http\Form;


use App\Models\Cabinet;
use Illuminate\Http\Request;

class CabinetForm extends Form
{
    /**
     * @param Request $request
     * @return mixed
     */
    protected function handle(Request $request)
    {
        return Cabinet::create($request->all());
    }
}
