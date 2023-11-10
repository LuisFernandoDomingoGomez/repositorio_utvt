<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CarrerasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('carreras')->insert([
            'name' => 'Desarrollo y Gestión de Software',
            'imagen' => 'img_carreras/desarrollo_software.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('carreras')->insert([
            'name' => 'Redes Inteligentes y Ciberseguridad',
            'imagen' => 'img_carreras/redes_ciberseguridad.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('carreras')->insert([
            'name' => 'Procesos Industriales',
            'imagen' => 'img_carreras/procesos_industriales.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}