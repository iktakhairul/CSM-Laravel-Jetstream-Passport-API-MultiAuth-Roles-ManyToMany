<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class AdminUpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email'   => [
                'required',
                'unique:App\Models\User,email,'.request()->route('user')->id,
            ],
            'role_id' => 'required|integer',
        ];
    }

    public function authorize()
    {
        return Gate::allows('manage_employee');
    }
}
