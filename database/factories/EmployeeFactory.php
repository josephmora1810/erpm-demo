<?php

namespace Database\Factories;

use App\Enum\DocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'document_type' => fake()->randomElement(DocumentType::cases()),
            'document_number' => fake()->unique()->numerify('########'),
            'position' => fake()->jobTitle(),
            'base_salary' => fake()->randomFloat(2, 300, 2500), // Salario entre 300 y 2500
        ];
    }
}