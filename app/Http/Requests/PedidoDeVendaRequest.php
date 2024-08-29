<?php

namespace App\Http\Requests;

use App\Models\Produto;
use Illuminate\Foundation\Http\FormRequest;

class PedidoDeVendaRequest extends FormRequest
{
    public function rules(): array
    {
        $this->merge([
            'loja_id' => auth()->user()->loja_id,
            'valor_total' => Produto::find($this->produto_id)->preco,
        ]);

        return [
            'data_do_pedido' => ['required', 'date'],
            'status' => ['required'],
            'produto_id' => ['required', 'exists:produtos,id'],
            'loja_id' => ['required'],
            'valor_total' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'data_do_pedido.required' => 'O campo data do pedido é obrigatório',
            'data_do_pedido.date' => 'O campo data do pedido deve ser uma data',
            'status.required' => 'O campo status é obrigatório',
            'produto_id.required' => 'O campo produto é obrigatório',
            'produto_id.exists' => 'O produto informado não existe',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
