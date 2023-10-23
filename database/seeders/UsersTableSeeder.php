<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fernando',
            'email' => 'al222010066@gmail.com',
            'genero' => 'masculino',
            'avatar' => 'avatar_masculino.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Karla',
            'email' => 'al222010231@gmail.com',
            'genero' => 'femenino',
            'avatar' => 'avatar_femenino.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Porfirio',
            'email' => 'al222011231@gmail.com',
            'genero' => 'masculino',
            'avatar' => 'avatar_masculino.jpg',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}