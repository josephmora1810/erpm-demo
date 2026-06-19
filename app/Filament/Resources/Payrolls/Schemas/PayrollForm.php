<?php

namespace App\Filament\Resources\Payrolls\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PayrollForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('employee_id')
                ->label('Empleado') // Etiqueta clara
                ->relationship('employee', 'name')
                ->required(),

            TextInput::make('period')
                ->label('Período') // Con tilde
                ->placeholder('Ej: Quincena 1 - Junio 2026')
                ->required(),

            TextInput::make('gross_amount')
                ->label('Salario Bruto')
                ->numeric()
                ->prefix('$') // Opcional: ayuda visual de moneda
                ->required(),

            TextInput::make('deductions')
                ->label('Deducciones')
                ->numeric()
                ->default(0)
                ->prefix('$')
                ->required(),

            TextInput::make('net_amount')
                ->label('Salario Neto')
                ->numeric()
                ->prefix('$')
                ->readOnly() // Recomendado: que sea de solo lectura si es calculado
                ->required(),
            ]);
    }
}
