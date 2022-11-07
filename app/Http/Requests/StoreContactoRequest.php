<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactoRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'assunto' => 'required',
            'mensagem' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Campo nome é obrigatório',
            'email.required' => 'Campo email é obrigatório',
            'assunto.required' => 'Campo assunto é obrigatório',
            'mensagem.required' => 'Campo mensagem é obrigatório',

            'email.email' => 'Email inserido é inválido'
        ];
    }
}
