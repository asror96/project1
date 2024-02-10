<?php

namespace app\Http\Requests;

use Orion\Http\Requests\Request;

class PlaceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function storeRules(): array
    {
        return [
            'name'=>'required|string',
            'longitude'=>'required|string',
            'latitude'=>'required|string',
            'category_id'=>'required|string',
            'evaluation'=>'required|float',
            'country_id'=>'required|integer',
        ];
    }

    public function updateRules(): array
    {
        return [
            'name'=>'required|string',
            'longitude'=>'required|string',
            'latitude'=>'required|string',
            'category_id'=>'required|string',
            'evaluation'=>'required|float',
            'country_id'=>'required|integer',
        ];
    }
}
