<?php

namespace App\Http\Form;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserForm extends Form
{

    /**
     * @inheritDoc
     */
    protected function handle(Request $request, ?Model $model): Model
    {
        $payload = collect($request->all());

        if ($payload->has('password')) {
            $payload['password'] = Hash::make($payload->get('password'));
        }

        $payload = $payload->all();

        if ($model) {
            $model->update($payload);
        } else {
            $model = User::create($payload);
        }
        return $model;
    }
}
