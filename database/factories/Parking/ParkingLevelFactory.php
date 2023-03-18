<?php

namespace Database\Factories\Parking;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking\ParkingLevel>
 */
class ParkingLevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'max_spaces' => fake()->numberBetween(0, 200),
            'description' => fake()->text(),
        ];
    }
}
