<?php

namespace App\Http\Requests\Api\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Api\Auth\Traits\ValidateRequest;

class RegisteredUserFormRequest extends FormRequest
{
    use ValidateRequest;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:2',
                'max:55',
            ],
            'email' => [
                'required',
                'email',
                'unique:users'

            ]
        ];
    }


}
