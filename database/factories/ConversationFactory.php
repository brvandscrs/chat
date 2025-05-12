<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'date_created' => $this->faker->dateTime,
            'date_updated' => $this->faker->dateTime,
            'creator_id' => $this->faker->numberBetween(1, 10),
            'inter1_id' => $this->faker->numberBetween(1, 10),
            'inter2_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
