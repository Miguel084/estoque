<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'preco',
        'quantidade',
    ];
}
