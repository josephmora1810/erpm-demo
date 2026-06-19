<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Invoice;
use App\Models\Payroll;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\TravelRequest;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // 1. Crear el usuario Administrador para entrar al panel
        $user = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // La contraseña será: password
        ]);

        Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        $user->assignRole('Super Admin');

        // 2. Crear Almacenes y sus Productos
        Warehouse::factory(3)->create()->each(function ($warehouse) {
            Product::factory(15)->create([
                'warehouse_id' => $warehouse->id,
            ]);
        });

        // 3. Crear Empleados, sus Nóminas y Viáticos
        Employee::factory(10)->create()->each(function ($employee) {
            Payroll::factory(3)->create([
                'employee_id' => $employee->id,
            ]);
            
            TravelRequest::factory(2)->create([
                'employee_id' => $employee->id,
            ]);
        });

        // 4. Crear Clientes y Proveedores
        $customers = Customer::factory(20)->create();
        $suppliers = Supplier::factory(10)->create();

        // 5. Crear Facturas aleatorias para Clientes (Ventas)
        foreach ($customers as $customer) {
            Invoice::factory(rand(1, 4))->create([
                'customer_id' => $customer->id,
                'supplier_id' => null,
            ]);
        }

        // 6. Crear Facturas aleatorias para Proveedores (Compras)
        foreach ($suppliers as $supplier) {
            Invoice::factory(rand(1, 3))->create([
                'customer_id' => null,
                'supplier_id' => $supplier->id,
            ]);
        }
    }
}
