<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->word(),
            'shortname' => $this->faker->word(),
            'country' => $this->faker->country(),
            'contact' => $this->faker->numberBetween(1, 1000),
            'wins' => $this->faker->numberBetween(1, 1000),
            'loses' => $this->faker->numberBetween(1, 1000),
            'draws' => $this->faker->numberBetween(1, 1000),
            'matches' => $this->faker->numberBetween(1, 1000),
            'goals' => $this->faker->numberBetween(1, 1000),
            'goals_conceded' => $this->faker->numberBetween(1, 1000),
            'user_id' => User::factory()
        ];
    }
}
