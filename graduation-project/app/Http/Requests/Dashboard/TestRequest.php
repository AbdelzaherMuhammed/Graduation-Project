<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'questions' => ['array', 'exists:questions,id'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
