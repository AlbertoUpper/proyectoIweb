<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\user;
use Illuminate\Validation\Rule;

class RequestUsuarios extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
        return [
            'user' => ['required','min:4',Rule::unique('users', 'name')->ignore($this->id)],
            'correo' => ['required','email','unique:users,email,'.$this->id],
            'tipo' => 'required'
        ];
    }
}
