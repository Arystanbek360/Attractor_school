<?php

namespace App\Http\Form;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class Form
{
    /**
     * @param Request $request
     * @param Model|null $model
     * @return Model
     */
    public static function execute(Request $request, ?Model $model = null): Model
    {
        return (new static)->handle($request, $model);
    }

    /**
     * @param Request $request
     * @param Model|null $model
     * @return Model
     */
    protected abstract function handle(Request $request, ?Model $model): Model;
}
