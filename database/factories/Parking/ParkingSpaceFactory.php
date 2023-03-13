<?php

namespace Database\Factories\Parking;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Parking\ParkingLevel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking\ParkingSpace>
 */
class ParkingSpaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parking_level_id' => ParkingLevel::factory(),
            'name' => fake()->name(),
            'description' => fake()->text(),
        ];
    }
}
