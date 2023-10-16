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
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->id();
            $table->string('paterno', 50);
            $table->string('materno',50);
            $table->string('nombres',100);
            
            $table->unsignedBigInteger('departamentos_id');
            $table->foreign('departamentos_id')->references('id')->on('departamentos');
            
            $table->string('institucion', 400);
            $table->string('celular', 8);
            $table->string('correo', 100);
            
            $table->unsignedBigInteger('generos_id');
            $table->foreign('generos_id')->references('id')->on('generos');
            
            $table->string('profesion', 100);
            
            $table->unsignedBigInteger('horarios_id');
            $table->foreign('horarios_id')->references('id')->on('horarios');

            $table->unsignedBigInteger('places_id');
            $table->foreign('places_id')->references('id')->on('places');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcion');
    }
};
