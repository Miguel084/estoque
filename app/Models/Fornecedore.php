<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedore extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'email',
    ];
}
