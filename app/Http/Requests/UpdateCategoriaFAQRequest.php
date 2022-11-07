<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoriaFAQRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'categoria' => 'required|regex:/^[A-ZÀ-úa-z\s]+$/',
            'descricao' => 'required|regex:/^[A-ZÀ-úa-z\s]+$/'
        ];
    }
    public function messages()
    {
        return [
            'categoria.required' => 'Campo categoria é obrigatório',
            'descricao.required' => 'Campo descrição é obrigatório',

            'categoria.regex' => 'Categoria inserida é inválida',
            'descricao.regex' => 'Descricao inserida é inválida',
        ];
    }
}
