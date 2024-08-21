<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedoresRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => ['required'],
            'telefone' => ['required'],
            'email' => ['required', 'email', 'max:254'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
