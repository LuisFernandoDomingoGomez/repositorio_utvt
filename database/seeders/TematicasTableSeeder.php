<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TematicasTableSeeder extends Seeder
{
    public function run()
    {
        $tematicas = [
            [
                'name' => 'HTML Sintaxis',
                'imagen' => 'img_tematicas/html_sintaxis.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laravel',
                'imagen' => 'img_tematicas/laravel.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SQL',
                'imagen' => 'img_tematicas/sql_certus.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mongo',
                'imagen' => 'img_tematicas/mongo.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vue.js',
                'imagen' => 'img_tematicas/vue_js.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Python',
                'imagen' => 'img_tematicas/python.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PHP',
                'imagen' => 'img_tematicas/php.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Javascript',
                'imagen' => 'img_tematicas/javascript.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'React.js',
                'imagen' => 'img_tematicas/react_js.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'React Native',
                'imagen' => 'img_tematicas/react_native.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Flutter',
                'imagen' => 'img_tematicas/flutter.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Node.js',
                'imagen' => 'img_tematicas/node_js.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nest.js',
                'imagen' => 'img_tematicas/nest_js.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Angular',
                'imagen' => 'img_tematicas/angular.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SpringBoot',
                'imagen' => 'img_tematicas/springboot.png',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kotlin',
                'imagen' => 'img_tematicas/kotlin.jpg',
                'carrera_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Packet Tracer',
                'imagen' => 'img_tematicas/packet_tracer.png',
                'carrera_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('tematicas')->insert($tematicas);
    }
}