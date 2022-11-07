<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequestReceitas extends FormRequest
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
            'nome' => 'required|min:3|max:20|',
            'descricao' => 'required',
            'ingre' => 'nullable',
            'preparo' => 'nullable',
            'img' => 'required',
            'id_categoria' => 'required|exists:category_wines,id'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'Nome obrigatório!',
            'descricao.required' => 'Descrição obrigatória',
            'img.required' => 'Foto obrigatoria',
            'id_categoria.required' => 'Categoria obrigatória'
        ];
    }
}
