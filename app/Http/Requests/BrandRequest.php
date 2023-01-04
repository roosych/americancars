<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'min:2', 'max:50', 'unique:brands,title'],
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'metatitle' => ['nullable', 'string', 'max:255'],
            'metadescription' => ['nullable', 'string', 'max:255'],
            'keywords' => ['nullable', 'string', 'max:255'],
            'active' => ['boolean']
        ];
    }
}
