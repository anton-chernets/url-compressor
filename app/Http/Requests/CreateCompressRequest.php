<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompressRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'url' => 'required|url',
            'hours' => 'required|min:0|max:24',
            'redirects' => 'required|min:0',
        ];
    }
}
