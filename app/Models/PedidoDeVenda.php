<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoDeVenda extends Model
{
    protected $fillable = [
        'data_do_pedido',
        'status',
        'cliente_id',
        'cliente_id',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    protected function casts()
    {
        return [
            'data_do_pedido' => 'date',
        ];
    }
}
