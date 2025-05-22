<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombres' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'ci' => $this->faker->unique()->numerify('########'),
            'nro_seguri' => $this->faker->unique()->numerify('########'),
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '2000-01-01'),
            'genero' => $this->faker->randomElement(['M', 'F']),
            'celular' => $this->faker->phoneNumber,
            'correo' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'grupo_sanguineo' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-']),
            'alergias' => $this->faker->sentence ?? 'Sin alergias',
            'contacto_emergencia' => $this->faker->phoneNumber,
            'observaciones' => $this->faker->text(255) ?? 'Sin observaciones',

        ];
    }
}
