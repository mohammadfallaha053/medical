<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $gender = fake()->randomElement(['male', 'female']);
        return [
            'first_name' => fake()->firstName($gender),
            'last_name'=> fake()->lastName(),
            'phone'=> fake()->phoneNumber(),
            'gender'=>$gender,
            'birthday'=>fake()->numberBetween(1950,2022),
            //
        ];
    }
}
