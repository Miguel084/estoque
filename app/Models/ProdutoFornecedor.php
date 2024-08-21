<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProdutoFornecedor extends Model
{
    protected $fillable = [
        'produto_id',
        'fornecedor_id',
        'produto_id',
        'fornecedor_id',
    ];

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produtos::class, 'produto_id');
    }

    public function fornecedor(): BelongsTo
    {
        return $this->belongsTo(Fornecedore::class, 'fornecedor_id');
    }
}
