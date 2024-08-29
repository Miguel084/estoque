<?php

namespace App\Providers;

use App\Models\Loja;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LojaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $loja = Loja::all();

        if ($loja->isEmpty()) {
            Loja::create([
                'nome' => 'Loja Padrão',
                'endereco' => 'Rua Padre Cícero, 123',
            ]);
        }
        View::share('lojas', $loja);
    }
}
