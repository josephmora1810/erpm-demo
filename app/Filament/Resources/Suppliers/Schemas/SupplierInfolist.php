<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SupplierInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nombre o Razón Social'),
                
                TextEntry::make('document_type')
                    ->label('Tipo de Documento')
                    ->badge(),
                
                TextEntry::make('document_number')
                    ->label('Número de Documento'),
                
                TextEntry::make('email')
                    ->label('Correo Electrónico')
                    ->placeholder('-'),
                
                TextEntry::make('phone')
                    ->label('Teléfono')
                    ->placeholder('-'),
                
                TextEntry::make('created_at')
                    ->label('Fecha de Creación')
                    ->dateTime('d/m/Y H:i')
                    ->placeholder('-'),
                
                TextEntry::make('updated_at')
                    ->label('Última Actualización')
                    ->dateTime('d/m/Y H:i')
                    ->placeholder('-'),
            ]);
    }
}
