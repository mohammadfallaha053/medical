<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
          $gender = fake()->randomElement(['male', 'female']);// comment
            return [
            'first_name' => fake()->firstName($gender),
            'last_name'=> fake()->lastName(),
            'Specialization'=>fake()->word(),
            'gender'=>$gender,
        ];
    }
}
