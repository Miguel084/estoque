<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produto_fornecedors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained('produtos');
            $table->foreignId('fornecedor_id')->constrained('fornecedores');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_fornecedors');
    }
};
