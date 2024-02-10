<?php

namespace app\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Orion\Http\Requests\Request;

class StoreUserRequest extends Request
{
    public function authorize(): bool
    {
        return true;
    }

    public function storeRules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
            'photo' => ['required', 'string'],
        ];
    }
}
