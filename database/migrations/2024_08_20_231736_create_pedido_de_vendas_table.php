<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pedido_de_vendas', function (Blueprint $table) {
            $table->id();
            $table->date('data_do_pedido');
            $table->string('status');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedido_de_vendas');
    }
};