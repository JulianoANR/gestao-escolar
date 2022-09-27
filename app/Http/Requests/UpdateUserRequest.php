<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|',
            'cpf' => 'string|max:14|',
            'rg' => 'string|max:12|',
            'matricula' => 'string|max:7|',
            'image' => 'image|max:2048',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(){
        return [
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'email.max' => 'O email deve ter no máximo 255 caracteres',
            'emai.email' => 'O email deve ser válido',
            'email.unique' => 'O email já está em uso',
            'cpf.max' => 'O CPF deve ter no máximo 11 caracteres',
            'rg.max' => 'O RG deve ter no máximo 9 caracteres',
            'image.image' => 'O arquivo deve ser uma imagem',
            'image.max' => 'O tamanho da imagem deve ser no máximo 2MB',
        ];
    }
}
