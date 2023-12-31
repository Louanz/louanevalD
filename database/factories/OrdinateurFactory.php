<?php

namespace Database\Factories;
use App\Models\Reseau;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ordinateur>
 */
class OrdinateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $reseau = Reseau::inRandomOrder()->first();
        return [
            'num_serie' => fake()->randomNumber(),
            'modele' => fake()->word(),
            'marque' => fake()->word(),
            'date_service' => fake()->date(),
            'reseau' => $reseau->id,
        ];
    }
}
