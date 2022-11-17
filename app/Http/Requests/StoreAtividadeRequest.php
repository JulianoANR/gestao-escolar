<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAtividadeRequest extends FormRequest
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
            'data' => 'required|date',
            'titulo' => 'required|string|max:100',
            'disciplina' => 'required|integer',
            'peso_atividade' => 'required|integer',
            'programada' => 'required',
            'tipo_programada' => 'required_if:programada,==,1',
            'bimestre' => 'required|integer',
            'observacao' => 'nullable|string',
        ];
    }

}
