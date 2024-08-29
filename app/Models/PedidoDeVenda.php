<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoDeVenda extends Model
{
    protected $fillable = [
        'data_do_pedido',
        'status',
        'produto_id',
        'loja_id',
        'valor_total',
    ];

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }


    protected function casts(): array
    {
        return [
            'data_do_pedido' => 'date',
        ];
    }
}
