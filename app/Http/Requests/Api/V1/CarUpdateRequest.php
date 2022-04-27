<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
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
            'car_make_year' => 'numeric',
            'car_number' => '',
            'user_id' => 'numeric|exists:users,id',
            'brand_id' => 'numeric|exists:brands,id',
            'model_id' => 'numeric|exists:car_models,id',
        ];
    }
}
