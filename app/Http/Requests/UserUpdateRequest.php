<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UserUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'email'   => [
                'required',
                'unique:App\Models\User,email,'.request()->route('user')->id,
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('users_view');
    }
}
