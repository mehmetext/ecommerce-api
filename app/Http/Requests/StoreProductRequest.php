<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            "name" => "required|max:255|unique:products",
            "detail" => "required",
            "price" => "required|numeric|max:100000000|min:0",
            "stock" => "required|numeric|max:100000|min:0",
            "discount" => "required|numeric|max:100|min:0"
        ];
    }
}
