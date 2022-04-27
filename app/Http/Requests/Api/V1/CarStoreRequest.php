<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'car_make_year' => 'required|numeric',
            'car_number' => 'required',
            'user_id' => 'required|numeric|exists:users,id',
            'brand_id' => 'required|numeric|exists:brands,id',
            'model_id' => 'required|numeric|exists:car_models,id',
        ];
    }
}
