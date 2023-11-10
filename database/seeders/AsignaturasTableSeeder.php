<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AsignaturasTableSeeder extends Seeder
{
    public function run()
    {
        $asignaturas = [
            [
                'name' => 'Aplicaciones Móviles',
                'imagen' => 'img_asignaturas/desarrollo_movil.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Aplicaciones Web Progresivas',
                'imagen' => 'img_asignaturas/pwa.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Aplicaciones Web',
                'imagen' => 'img_asignaturas/desarrollo_web.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Creación de Videojuegos',
                'imagen' => 'img_asignaturas/creacion_videojuegos.jpeg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Base de datos',
                'imagen' => 'img_asignaturas/base_datos.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Diseño Digital',
                'imagen' => 'img_asignaturas/diseño_digital.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Base de datos en la Nube',
                'imagen' => 'img_asignaturas/bd_nube.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gestión del Proceso de Desarrollo de SW.',
                'imagen' => 'img_asignaturas/gestion_dev.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Programacion Orientada a Objetos',
                'imagen' => 'img_asignaturas/poo.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Seguridad en el Desarrollo de Software',
                'imagen' => 'img_asignaturas/seguridad_dev.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('asignaturas')->insert($asignaturas);
    }
}