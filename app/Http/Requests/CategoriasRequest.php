<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
{
    public function rules(): array
    {
        $this->merge([
            'loja_id' => auth()->user()->loja_id,
        ]);
        return [
            'nome' => ['required'],
            'loja_id' => ['required', 'exists:lojas,id'],
        ];
    }
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
