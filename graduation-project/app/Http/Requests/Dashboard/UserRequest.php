<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        $rules = [
            'full_name' => ['nullable', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'max:255'],
            'email' => ['required_without:phone', 'nullable', 'email', 'max:255', 'unique:'.'users'],
            'phone' => ['required_without:email', 'nullable', 'numeric', 'unique:'.'users'],
            'type' => ['required', 'in:user,admin'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if (in_array("PUT", request()->route()->methods)) {
            $id =  $this->user->id;
            $rules['password'] = 'nullable|string';
            $rules['email'] = 'required_without:phone|nullable|email|unique:'.'users'.',email,' . $id ?? ' ';
            $rules['phone'] = 'required_without:email|nullable|numeric|unique:'.'users'.',phone,' . $id ?? ' ';
        }


        return $rules;
    }

    public function authorize()
    {
        return true;
    }
}