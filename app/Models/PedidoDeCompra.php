<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PedidoDeCompra extends Model
{
    protected $fillable = [
        'data_do_pedido',
        'status',
        'fornecedores_id',
    ];

    public function fornecedores(): BelongsTo
    {
        return $this->belongsTo(Fornecedore::class);
    }

    protected function casts()
    {
        return [
            'data_do_pedido' => 'date',
        ];
    }
}
