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
                    ->required(),
                Select::make('document_type')
                    ->options(DocumentType::class)
                    ->required(),
                TextInput::make('document_number')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                TextInput::make('base_salary')
                    ->required()
                    ->numeric(),
            ]);
    }
}
