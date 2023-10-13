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
            $table->text('descripcion');
            $table->unsignedBigInteger('carrera_id')->nullable();
            $table->unsignedBigInteger('asignatura_id')->nullable();
            $table->unsignedBigInteger('tematica_id')->nullable();
            $table->string('autor')->nullable(); // Campo para el nombre del autor (opcional)
            $table->unsignedBigInteger('user_id'); // Agregar este campo para vincular al usuario que crea el recurso
            $table->boolean('anonimo')->default(false); // Campo para indicar si es anonimo
            $table->string('archivo'); // Campo pata subir el archivo
            $table->enum('tipo', ['imagen', 'video', 'documento']); // Categorizar o clasificar los recursos
            $table->enum('estado', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente'); // Estado de recursos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recursos');
    }
};
