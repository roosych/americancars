<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'brand_id' => ['required', 'integer', 'exists:brands,id'],
            'carmodel_id' => ['required', 'integer', 'exists:carmodels,id'],
            'description' => ['nullable', 'string', 'max:1000'],
            'drive_id' => ['required', 'integer', 'exists:drives,id'],
            'available_id' => ['required', 'integer', 'exists:availables,id'],
            'transmission_id' => ['required', 'integer', 'exists:transmissions,id'],
            'fuel_id' => ['required', 'integer', 'exists:fuels,id'],
            'price' => ['required', 'digits_between:1,7'],
            'currency' => ['required', 'integer', 'digits:1'],
            'mileage' => ['required', 'integer', 'digits:1'],
            'mileage_total' => ['nullable', 'digits_between:1,7'],
            'engine' => ['nullable', 'digits_between:1,5'],
            'year' => ['required', 'integer', 'digits:4'],
            'vin' => ['nullable', 'string'],
            'active' => ['boolean'],
            'metatitle' => ['nullable', 'string', 'max:255'],
            'metadescription' => ['nullable', 'string', 'max:255'],
            'keywords' => ['nullable', 'string', 'max:255'],

            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048', 'dimensions:max_width=645,max_height=440']
        ];
    }
}
