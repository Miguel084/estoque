<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pedidos_de_compras', function (Blueprint $table) {
            $table->id();
            $table->date('data_do_pedido');
            $table->string('status');
            $table->foreignId('fornecedor_id')->constrained('fornecedores');
            $table->foreignId('loja_id')->constrained();
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos_de_compras');
    }
};
