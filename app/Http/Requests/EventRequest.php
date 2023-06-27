<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize()
    {
        if (auth()->id()) {
            return true;
        }

        return false;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'date' => 'required|string|max:100',
            'time' => 'required|string|max:100',
            'location' => 'required|string|max:255',
            'info' => 'nullable|string|max:255',
            'details' => 'required|string',
            'image' => 'required|image|max:2048'
        ];
    }
}
