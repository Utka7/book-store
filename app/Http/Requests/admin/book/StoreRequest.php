<?php

namespace App\Http\Requests\admin\book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'author_id' => 'required',
            'category_id' => 'required',
            'preview_image' => 'required',
        ];
    }
}