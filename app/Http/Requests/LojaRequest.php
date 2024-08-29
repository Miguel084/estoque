<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LojaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => ['required'],
            'endereco' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
