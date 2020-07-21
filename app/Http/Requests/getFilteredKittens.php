<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class getFilteredKittens extends FormRequest
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
            'height' => "array",
            'height.*' => "integer",
            'weight' => "array",
            'weight.*' => "integer",
            'width' => "array",
            'width.*' => "integer",
            'age' => "array",
            'age.*' => "integer",
            'fur' => "array",
            'fur.*' => "string",
            'color' => "array",
            'color.*' => "string",
            'breed' => "array",
            'breed.*' => "string"
        ];
    }
}
