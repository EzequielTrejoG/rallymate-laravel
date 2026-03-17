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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fechaRegistro');
            $table->foreignId('cveCarrera')
                  ->constrained('carreras', 'id')
                  ->onDelete('cascade');
            $table->integer('Grupo');
            $table->string('Maestros', 80);
            $table->string('nomEquipo', 255);
            $table->foreignId('idRally')
                  ->constrained('rallies', 'id')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
