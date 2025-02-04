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
        Schema::create('lanchonetes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->text('descricao');
            $table->string('localidade', 255);
            $table->bigInteger('cep');
            $table->bigInteger('cnpj');
            $table->string('email')->nullable();
            $table->bigInteger('telefone');
            $table->string('site')->nullable();
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lanchonetes');
    }
};
