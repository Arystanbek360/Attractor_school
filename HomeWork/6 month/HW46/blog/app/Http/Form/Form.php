<?php

namespace App\Http\Form;


use Illuminate\Http\Request;

abstract class Form
{

    /**
     * @param Request $request
     * @return mixed
     */
    public static function execute(Request $request)
    {
        return (new static)->handle($request);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    protected abstract function handle(Request $request);
}
