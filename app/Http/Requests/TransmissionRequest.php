<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransmissionRequest extends FormRequest
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
            'title_az' => ['required', 'string', 'min:2', 'max:255'],
            'title_ru' => ['required', 'string', 'min:2', 'max:255'],
        ];
    }
}
