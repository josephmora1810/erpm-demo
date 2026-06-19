<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('warehouse_id')
                    ->label('Almacén') // Etiqueta en español
                    ->relationship('warehouse', 'name')
                    ->required(),
                
                TextInput::make('name')
                    ->label('Nombre del Producto')
                    ->required(),
                
                TextInput::make('sku')
                    ->label('Código SKU')
                    ->required(),
                
                TextInput::make('price')
                    ->label('Precio de Venta')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                
                TextInput::make('stock')
                    ->label('Existencia (Stock)')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
