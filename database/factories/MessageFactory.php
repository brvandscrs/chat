<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expediteur_id' => \App\Models\User::all()->random()->id,
            'date_heure' => $this->faker->dateTimeBetween('-1 second', 'now'),
            'message' => $this->faker->paragraph(),
        ];
    }
}
