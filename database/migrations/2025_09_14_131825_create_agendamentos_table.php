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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filial_id')->constrained('filials')->cascadeOnDelete();
            $table->foreignId('mecanico_id')->constrained()->cascadeOnDelete();
            $table->foreignId('cliente_nome', 100);
            $table->string('cliente_telefone', 20)->nullable();
            $table->date('data');
            $table->time('hora');
            $table->text('descricao')->nullable();
            $table->enum('status', ['pendente','em_andamento','concluido','cancelado'])->default('pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
