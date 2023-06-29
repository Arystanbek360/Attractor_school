<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255|required_without:email',
            'number' => 'required|min:8|max:17|regex:
        /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){8,17}(\s*)?$/m',
            'email' => 'nullable|email|max:255|required_without:name',
            'picture' => 'image'
        ];

    }
}
