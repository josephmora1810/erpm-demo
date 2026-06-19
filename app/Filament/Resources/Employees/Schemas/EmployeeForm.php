<?php

namespace App\Filament\Resources\Employees\Schemas;

use App\Enum\DocumentType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()->label('nombre'),
                Select::make('document_type')
                    ->options(DocumentType::class)
                    ->required()->label('tipo de documento'),
                TextInput::make('document_number')
                    ->required()->label('tipo de documento'),
                TextInput::make('position')
                    ->required()->label('puesto de trabajo'),
                TextInput::make('base_salary')
                    ->required()
                    ->numeric()->label('salario base'),
            ]);
    }
}
