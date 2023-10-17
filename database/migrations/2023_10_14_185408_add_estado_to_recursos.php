<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstadoToRecursos extends Migration
{
    public function up()
    {
        Schema::table('recursos', function (Blueprint $table) {
            $table->enum('estado', ['pendiente', 'aprobado', 'rechazado'])->default('pendiente');
        });
    }

    public function down()
    {
        Schema::table('recursos', function (Blueprint $table) {
            $table->dropColumn('estado');
        });
    }
}
