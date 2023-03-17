<?php

namespace Database\Factories\System;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\System\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\System\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'dark_mode' => fake()->boolean(),
        ];
    }
}
