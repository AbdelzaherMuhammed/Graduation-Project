<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ToolRequest extends FormRequest
{
    public function rules()
    {
        $rules =  [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png,svg|max:10000',
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $rules['photo'] = ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:2048'];
        }
        return $rules;
    }

    public function authorize()
    {
        return true;
    }
}