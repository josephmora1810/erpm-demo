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
                    ->relationship('employee','name')->required(),
                TextInput::make('period')
                    ->required(),
                TextInput::make('gross_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('deductions')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('net_amount')
                    ->required()
                    ->numeric(),
            ]);
    }
}
