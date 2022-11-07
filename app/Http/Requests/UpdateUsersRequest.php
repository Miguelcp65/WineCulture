<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'apelido' => 'required|min:2|max:50',
            'img' => 'nullable',
            'data_nasc' => 'required',
            'genero' => 'required',
            'pais' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome obrigatório',
            'name.min' => 'Nome não chega ao mínimo de 2 caracteres',
            'name.max' => 'Nome ultrapassa do limite de 50 caracteres',

            'apelido.required' => 'Apelido obrigatório',
            'apelido.min' => 'Apelido não chega ao mínimo de 2 caracteres',
            'apelido.max' => 'Apelido ultrapassa do limite de 50 caracteres',

            'data_nasc.required' => 'Data de nascimento obrigatório',
            'genero.required' => 'Género obrigatória',
            'pais.required' => 'País obrigatória',
        ];
    }
}
