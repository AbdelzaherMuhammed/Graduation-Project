<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'type' => ['required', 'in:mcq,essay'],
            'choices' => ['array', 'min:2'],
            'mark_when_correct' => ['required','string'],
            'mark_when_false' => ['required','string']
        ];
    }

    public function authorize()
    {
        return true;
    }
}
