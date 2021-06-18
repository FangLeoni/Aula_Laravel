<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'nome' => 'required|between:3,35',
            'materia' => 'required|between:4,40',
            'vl_hora_aula' => 'required|numeric|between:15,50',
            'created_at' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Informar seu nome',
            'materia.required' => 'Informar sua materia',
            'vl_hora_aula.required' => 'Informar seu salario por hora aula',
            'created_at.required' => 'Informar a data de criação!',
        ];

        
    }
}
