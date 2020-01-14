<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditHobbyRequest extends FormRequest
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
            'type_id' => 'Required', 
            'city_id' => 'Required', 
            'town_id' => 'Required', 
            'district_id' => 'Required', 
        ];
    }
}
