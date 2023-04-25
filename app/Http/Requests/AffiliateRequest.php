<?php

namespace App\Http\Requests;

use App\Rules\Phonenumber;
use Illuminate\Foundation\Http\FormRequest;

class AffiliateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:150',
            'email' => 'required|email',
            'phone' => ['nullable', 'string', new Phonenumber],
            'pract' => 'required_without:volunteer',
            'volunteer' => 'required_without:pract',
            'message' => 'required:string|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please provide your name',
            'email.required' => 'Please provide your email address',
            'phone.nullable' => 'Please leave a valid phone number:',
            'pract.required_without' => 'Please check either the practitioner or volunteer checkbox (or both)',
            'volunteer.required_without' => 'Please check either the practitioner or volunteer checkbox (or both)',
            'message.required' => 'Please leave a message (max 5000 characters)'
        ];
    }
}
