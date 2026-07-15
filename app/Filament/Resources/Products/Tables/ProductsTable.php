<?php

namespace App\Filament\Resources\Products\Tables;

use App\Filament\Exports\ProductExporter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->headerActions([
                ExportAction::make()
                    ->label('Exportar Productos') // Etiqueta del botón de exportar
                    ->exporter(ProductExporter::class)
                    ->color('success')
                    ->icon('heroicon-o-document-text')
            ])
            ->columns([
                TextColumn::make('warehouse.name')
                    ->label('Almacén')
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Nombre del Producto')
                    ->searchable(),

                TextColumn::make('sku')
                    ->label('Código SKU')
                    ->searchable(),

                TextColumn::make('price')
                    ->label('Precio')
                    ->money('USD')
                    ->sortable(),

                TextColumn::make('stock')
                    ->label('Existencia')
                    ->badge()
                    ->color(fn (int $state) : string => match (true){
                        $state <= 0 => 'danger',
                        $state <= 10 => 'warning',
                        default => 'success'
                    }),

                TextColumn::make('created_at')
                    ->label('Fecha de Creación')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Última Actualización')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('requisicion')
                    ->label('Requisición')
                    ->color('info')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => route('requisicion.pdf', $record))
                    ->openUrlInNewTab(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
