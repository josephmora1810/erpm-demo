<?php

namespace Database\Factories;

use App\Enum\DocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->company() . ' ' . fake()->companySuffix(),
            'document_type' => fake()->randomElement(DocumentType::cases()),
            'document_number' => fake()->unique()->numerify('########'),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
        ];
    }
}