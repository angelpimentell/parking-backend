<?php

namespace Database\Factories\Parking;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking\TicketPlan>
 */
class TicketPlanFactory extends Factory
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
            'price' => fake()->randomFloat(4, max: 10000),
            'hours' => fake()->randomDigitNotNull(),
            'penalty_per_hour' => fake()->randomFloat(4, max: 10000),
            'description' => fake()->text(),
        ];
    }
}
