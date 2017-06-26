<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'depth' => 'numeric|nullable',
            'price' => 'required|numeric',
            'quantity' => 'numeric|nullable',
            'type' => 'required',
            'active' => 'required|sometimes',
            'year' => 'required|numeric',
            'image' => 'required|sometimes',
            'spotenvy' => 'url|nullable'
        ];
    }
}
// 'name', 'slug', 'width', 'height', 'depth',
//         'original', 'price', 'quantity', 'type',
//         'description', 'active', 'year'