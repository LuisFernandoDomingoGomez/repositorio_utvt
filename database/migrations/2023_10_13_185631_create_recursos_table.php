<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('carrera_id')->nullable();
            $table->unsignedBigInteger('asignatura_id')->nullable();
            $table->unsignedBigInteger('tematica_id')->nullable();
            $table->string('autor')->nullable(); // Campo para el nombre del autor (opcional)
            $table->unsignedBigInteger('user_id'); // Agregar este campo para vincular al usuario que crea el recurso
            $table->boolean('anonimo')->default(false); // Campo para indicar si es anonimo
            $table->text('archivo')->nullable(); // Campo pata subir el archivo
            $table->string('tipo');
            $table->timestamps();
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas')->onDelete('cascade');
            $table->foreign('tematica_id')->references('id')->on('tematicas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recursos');
    }
};
