<?php

namespace App\Filament\Resources\Customers\Schemas;

use App\Enum\DocumentType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
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
                    ->required()->label('documento de identidad'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()->label('correo electronico'),
                TextInput::make('phone')
                    ->tel()->label('telefono'),
            ]);
    }
}
