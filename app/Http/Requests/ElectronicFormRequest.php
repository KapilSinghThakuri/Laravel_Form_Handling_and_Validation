<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ElectronicFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return auth()->check();
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
            // 'name'=> 'required|min:3|max:255|string',
            'name'=> ['required', 'min:3', 'max:255', 'string'], // using in array format
            
            'electronic_category'=> 'required|string',
            'description'=> 'required|string',
            'is_available'=> 'sometimes',
            'price'=> 'required|numeric',
        ];
    }

    // FOR COSTUMIZING ERROR MESSAGE
    public function messages(): array
    {
        return[
            'name.required' => 'Device name cannot be empty',
            'name.min' => 'Give atleast 3 character for device name',
            'electronic_category.required' => 'Device Category cannot be empty',
            'price.numeric' => 'Give price in number',
        ];
    }
}
