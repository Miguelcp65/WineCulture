<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriaFAQRequest extends FormRequest
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
