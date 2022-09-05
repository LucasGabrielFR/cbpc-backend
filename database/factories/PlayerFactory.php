<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tag' => $this->faker->word(),
            'number' => $this->faker->numberBetween(1, 99),
            'wins' => $this->faker->numberBetween(1, 1000),
            'loses' => $this->faker->numberBetween(1, 1000),
            'draws' => $this->faker->numberBetween(1, 1000),
            'matches' => $this->faker->numberBetween(1, 1000),
            'goals' => $this->faker->numberBetween(1, 1000),
            'assists' => $this->faker->numberBetween(1, 1000),
            'defences' => $this->faker->numberBetween(1, 1000),
            'user_id' => User::factory()
        ];
    }
}
