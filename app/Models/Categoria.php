<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nome',
        'loja_id',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function loja()
    {
        return $this->belongsTo(Loja::class);
    }

}
