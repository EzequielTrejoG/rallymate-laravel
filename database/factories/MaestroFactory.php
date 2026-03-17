<?php

namespace Database\Factories;

use App\Models\Maestro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Maestro>
 */
class MaestroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noTrabajador' => fake()->unique()->numerify('########'),
            'Apellidos' => fake()->lastName(),
            'Nombre' => fake()->firstName(),
            'fechaNac' => fake()->date('Y-m-d', '2000-01-01'),
        ];
    }
}
