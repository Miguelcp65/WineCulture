<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFAQRequest extends FormRequest
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
            'pergunta' => 'required|regex:/^[A-ZÀ-úa-z\s]+$/',
            'resposta' => 'required',
            'categoria_id' => 'required|exists:categoria_perguntas,id'
        ];
    }
    public function messages()
    {
        return [
            'pergunta.required' => 'Campo pergunta é obrigatório',
            'resposta.required' => 'Campo resposta é obrigatório',

            'pergunta.regex' => 'Valor inserido no campo pergunta é inválido'
        ];
    }
}
