<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'nome' => 'required|between:3,20',
            'idade' => 'required|numeric|between:14,90',
            'curso' => 'required',
            'bolsa' => 'required|numeric|between:100,1500',
            'created_at' => 'required',
        ];


    }

    public function messages()
    {
        return [
            'nome.required' => 'Informar seu nome',
            'idade.required' => 'Informar sua idade',
            'idade.numeric' => 'Idade não numérica ',
            'curso.required' => 'Informar seu curso',
            'bolsa.required' => 'Informar seu bolsa',
            'bolsa.numeric' => 'Bolsa não numérica',
            'created_at.required' => 'Informar a data de criação!',
        ];

        
    }
}
