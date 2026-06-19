<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('warehouse.name')
                    ->label('Almacén'),
                
                TextEntry::make('name')
                    ->label('Nombre del Producto'),
                
                TextEntry::make('sku')
                    ->label('Código SKU'),
                
                TextEntry::make('price')
                    ->label('Precio de Venta')
                    ->money('USD'),
                
                TextEntry::make('stock')
                    ->label('Existencia Actual')
                    ->numeric(),
                
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
