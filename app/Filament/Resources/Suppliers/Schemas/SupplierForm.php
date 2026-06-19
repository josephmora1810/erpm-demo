<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use App\Enum\DocumentType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre o Razón Social')
                    ->required(),
                
                Select::make('document_type')
                    ->label('Tipo de Documento')
                    ->options(DocumentType::class) // Filament leerá automáticamente tu getLabel()
                    ->required(),
                
                TextInput::make('document_number')
                    ->label('Número de Documento')
                    ->required(),
                
                TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email(),
                
                TextInput::make('phone')
                    ->label('Teléfono')
                    ->tel(),
            ]);
    }
}
