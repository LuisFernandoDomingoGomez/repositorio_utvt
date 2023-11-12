<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CarrerasTableSeeder::class,
            AsignaturasTableSeeder::class,
            TematicasTableSeeder::class,
            SeederTablePermisos::class,
        ]);

        // Llamar al Factory para crear usuarios falsos
        UserFactory::new()->count(50)->create();
    }
}
