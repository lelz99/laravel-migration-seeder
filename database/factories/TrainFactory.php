<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rail_company' => fake()->state(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' =>fake()->time(),
            'arrival_time' =>fake()->time(),
            'train_code' => fake()->regexify('[100000-999999]{6}'),
            'carriage' => fake()->randomDigitNotNull(),
            'on_time' => fake()->boolean(),
            'canceled' => fake()->boolean(),
        ];
    }
}
