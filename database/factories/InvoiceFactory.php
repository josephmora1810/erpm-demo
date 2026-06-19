<?php

namespace Database\Factories;

use App\Enum\InvoiceType;
use App\Enum\Status;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    public function definition(): array
    {
        // Simulamos que la factura puede ser de Venta (Customer) o de Compra (Supplier)
        $isSale = fake()->boolean();

        return [
            'number' => 'FAC-' . fake()->unique()->numerify('######'),
            'invoice_type' => fake()->randomElement(InvoiceType::cases()),
            'customer_id' => $isSale ? Customer::factory() : null,
            'supplier_id' => !$isSale ? Supplier::factory() : null,
            'total' => fake()->randomFloat(2, 50, 5000),
            'status' => fake()->randomElement(Status::cases()),
        ];
    }
}