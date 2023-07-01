<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cabecalhos', function (Blueprint $table) {
            $table->id();
            $table->string('imagem', 100);
            $table->string('imagem_mobile', 100);
            $table->string('titulo', 100);
            $table->text('texto');
            $table->string('tag', 100);
            $table->string('saber_mais', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabecalhos');
    }
};
