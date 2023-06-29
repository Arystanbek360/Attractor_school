<?php

namespace App\Http\Form;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NoteForm extends Form
{
    /**
     * @inheritDoc
     */
    protected function handle(Request $request, ?Model $model): Model
    {
        $request['user_id'] = auth_user()->id;
        $payload = collect($request->all());

        $payload = $payload->all();

        if ($model) {
            $model->update($payload);
        } else {
            $model = new Note();
            $model->user_id = $payload['user_id'];
            $model->body = $payload['body'];
            $model->save();
        }

        return $model;
    }
}
