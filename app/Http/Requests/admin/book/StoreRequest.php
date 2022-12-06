<?php

namespace App\Http\Requests\admin\book;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

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
