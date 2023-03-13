<?php

namespace Database\Factories\Parking;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Parking\ParkingSpace;
use App\Models\Parking\TicketPlan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_plan_id' => TicketPlan::factory(),
            'parking_space_id' => ParkingSpace::factory(),
            'name' => fake()->name(),
            'active' => fake()->boolean(),
            'expiration_date' => fake()->dateTime(),
        ];
    }
}
