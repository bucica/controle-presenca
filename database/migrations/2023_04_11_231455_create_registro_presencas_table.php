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
        Schema::create('registro_presencas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('aluno_materia_id');
            $table->boolean('presente')->default(false);
            $table->dateTime('data_referencia');
            $table->foreign('aluno_materia_id')->references('id')->on('aluno_materias')->onDelete('cascade');

            $table->index('aluno_materia_id');
            $table->index('data_referencia');
            $table->index('presente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_presencas');
    }
};
