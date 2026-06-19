<?php

namespace Database\Factories;

use App\Enum\TravelStatus;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class TravelRequestFactory extends Factory
{
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'destination' => fake()->city(),
            'purpose' => fake()->sentence(),
            'estimated_amount' => fake()->randomFloat(2, 100, 1000),
            'status' => fake()->randomElement(TravelStatus::cases()),
        ];
    }
}