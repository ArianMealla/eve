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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->date('fechainicio');
            $table->dateTime('fechafinal');
            
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias');
           
            $table->unsignedBigInteger('gestions_id');
            $table->foreign('gestions_id')->references('id')->on('gestions')->onDelete('cascade');
           
            $table->unsignedBigInteger('tiposeventos_id');
            $table->foreign('tiposeventos_id')->references('id')->on('tiposeventos')->onDelete('cascade');
           
            $table->unsignedBigInteger('lugars_id');
            $table->foreign('lugars_id')->references('id')->on('lugars')->onDelete('cascade');
            
            $table->string('cupo', 400);
            $table->boolean('disponible');
            $table->string('descripcion', 200);
            
           
            
            

           
           
            
            
           
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
