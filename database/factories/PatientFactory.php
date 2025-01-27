<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>fake()->name(),
            'edad'  =>fake()->numberBetween(18, 100),
            'email' =>fake()->email(),
            'telefono' =>fake()->numerify('####'),
            'clinic_id' =>fake()->unique()->numberBetween(1, 10),
        ];
    }
}


