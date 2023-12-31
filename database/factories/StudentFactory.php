<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'last_name' => fake()->lastname(),
            'address' => fake()->address(),
            'dni' => fake()->randomNumber(8, true),
            'phone_number' =>fake()->e164PhoneNumber(),
            'observations' =>fake()->sentence(),
            'birthdate' => fake()->date(),
           
        ];
    }
}
