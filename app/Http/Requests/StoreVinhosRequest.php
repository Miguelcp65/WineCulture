<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVinhosRequest extends FormRequest
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
            'nome' => 'required|min:5|max:150',
            'id_categoria' => 'required|exists:category_wines,id',
            'id_produtor' => 'required|exists:users,id',
            'img' => 'nullable',
            'descricao'  => "required",
            'regiao'  => "required",
			'qnt_cl'  => "required",
			'perct_alco'  => 'required|gt:0|lt:101',
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Nome obrigatório',
            'nome.min' => 'Nome não chega ao mínimo de 5 caracteres',
            'nome.max' => 'Nome ultrapassa do limite de 150 caracteres',

            'id_categoria.required' => 'Categoria obrigatória',
            'id_produtor.required' => 'Produtor obrigatório',

            'id_categoria.exists' => 'Categoria não existe',
            'id_produtor.exists' => 'Produtor não existe',

            'descricao.required' => 'Descrição obrigatória',
            'regiao.required' => 'Região obrigatória',
            'qnt_cl.required' => 'Quantidade cilindrica obrigatória',

            'perct_alco.required' => 'Percentagem de álcool obrigatória',

            'perct_alco.gt' => 'Percentagem de álcool inferior ao mínimo de 0%',
            'perct_alco.lt' => 'Percentagem de álcool superior ao maximo de 100%',
        ];
    }
}
