<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LabCase>
 */
class LabCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id'=>1,
            'customer_id' => 1,
            'user_case_id' => 1000,
            'patient_first_name' => fake()->firstName(),
            'patient_last_name' => fake()->lastName(),
            'price' => fake()->randomFloat(2,50,2000),
            'pan_number' => fake()->randomNumber(3),
        ];
    }
}
