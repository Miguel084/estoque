<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pedidoDeCompraRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'data_do_pedido' => ['required', 'date'],
            'status' => ['required'],
            'fornecedores_id' => ['required', 'exists:fornecedores'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
