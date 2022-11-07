<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
        'titulo' => 'required',
        'id_categoria' => 'required',
        'data' => 'required',
        'preview' => 'required',
        'descricao' => 'required',
        'img' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => 'Campo titulo é obrigatório',
            'id_categoria.required' => 'Campo categoria é obrigatório',
            'descricao.required' => 'Campo descrição é obrigatório',
            'data.required' => 'Campo data é obrigatório',
            'preview.required' => 'Campo preview é obrigatório',
            'img.required' => 'Campo imagem é obrigatório',
        ];
    }
}
