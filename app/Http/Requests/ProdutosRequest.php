<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => ['required'],
            'descricao' => ['required'],
            'preco' => ['required'],
            'quantidade' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'preco.required' => 'O campo preço é obrigatório',
            'quantidade.required' => 'O campo quantidade é obrigatório',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
