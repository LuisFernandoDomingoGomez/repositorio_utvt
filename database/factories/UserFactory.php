<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $genero = $this->faker->randomElement(['masculino', 'femenino']); // Genera un género aleatorio

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'genero' => $genero, // Asigna el género generado aleatoriamente
            'avatar' => $genero === 'masculino' ? 'avatar_masculino.jpg' : 'avatar_femenino.jpg', // Asigna el avatar según el género
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Puedes definir una contraseña fija o generar una aleatoria aquí
            'remember_token' => Str::random(10),
        ];
    }
}