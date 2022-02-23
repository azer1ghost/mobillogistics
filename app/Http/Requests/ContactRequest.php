<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'number' => 'required|string',
            'subject' => 'nullable|string',
            'note' => 'nullable|string',
            'email' => 'required|email:rfc,dns',
        ];
    }
}
