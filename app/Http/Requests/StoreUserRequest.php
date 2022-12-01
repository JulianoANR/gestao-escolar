<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('gestor_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'              => ['required','string',],
            'email'             => ['required','unique:users,email,'],
            'cargos.*'          => ['integer',],
            'cargos'            => ['required','array',],
            'matricula'         => ['nullable','integer', 'min:1000', 'max:50000', ],
            'cpf'               => ['required', 'string',],
            'data_nascimento'   => ['nullable', 'date'],
        ];
    }
}
