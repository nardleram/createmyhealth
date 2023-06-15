<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostImageRequest extends FormRequest
{
    public function authorize()
    {
        if (auth()->user()) {
            return true;
        }

        return false;
    }

    public function rules()
    {
        return [
            'image' => 'required|image|max:2048',
            'post_id' => 'required|numeric'
        ];
    }
}
