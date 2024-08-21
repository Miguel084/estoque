<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoDeVendaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'data_do_pedido' => ['required', 'date'],
            'status' => ['required'],
            'cliente_id' => ['required', 'exists:clientes'],
            'cliente_id' => ['required', 'exists:clientes'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
