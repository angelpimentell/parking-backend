<?php

namespace Database\Factories\Parking;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Parking\Ticket;
use App\Models\System\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parking\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::factory(),
            'user_id' => User::factory(),
            'amount_paid' => fake()->randomFloat(4),
            'description' => fake()->text(),
        ];
    }
}
