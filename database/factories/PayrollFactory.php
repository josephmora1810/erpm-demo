<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class PayrollFactory extends Factory
{
    public function definition(): array
    {
        $gross = fake()->randomFloat(2, 300, 2500);
        $deductions = $gross * 0.10; // 10% de deducciones ficticias

        return [
            'employee_id' => Employee::factory(),
            'period' => 'Quincena ' . fake()->numberBetween(1, 2) . ' - ' . fake()->monthName() . ' 2026',
            'gross_amount' => $gross,
            'deductions' => $deductions,
            'net_amount' => $gross - $deductions,
        ];
    }
}