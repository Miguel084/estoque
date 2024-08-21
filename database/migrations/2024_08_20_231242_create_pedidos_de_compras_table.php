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
            $table->unsignedBigInteger('fornecedor_id');
            $table->timestamps();

            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos_de_compras');
    }
};
