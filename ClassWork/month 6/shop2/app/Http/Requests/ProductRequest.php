<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'title' => 'required|min:5|max:250',
            'price' => 'required|numeric|max:999',
            'description' => 'not_regex:/<[a-z][\s\S]*>/|sometimes|string|nullable',
            'category_id' => 'sometimes|numeric|exists:categories,id|nullable',
            'picture' => 'image'
        ];
    }
}
