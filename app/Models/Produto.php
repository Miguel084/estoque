<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'categoria_id',
        'imagem',
    ];

    protected $table = 'produtos';

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function pedidoDeVenda()
    {
        return $this->hasMany(PedidoDeVenda::class);
    }
}
