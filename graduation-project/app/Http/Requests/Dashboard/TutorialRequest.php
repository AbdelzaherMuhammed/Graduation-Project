<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TutorialRequest extends FormRequest
{
    public function rules()
    {
        $rules =  [
            'description' => 'required',
            'video' => 'required|mimes:mp4,mov,ogg,qt',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['video'] = ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'];
        }
        return $rules;
    }

    public function authorize()
    {
        return true;
    }
}