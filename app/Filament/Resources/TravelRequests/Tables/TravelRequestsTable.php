<?php

namespace App\Filament\Resources\TravelRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TravelRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee.name')
                    ->label('Empleado')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('destination')
                    ->label('Destino')
                    ->searchable(),
                
                TextColumn::make('estimated_amount')
                    ->label('Monto Estimado')
                    ->money('USD')
                    ->sortable(),
                
                TextColumn::make('status')
                    ->label('Estado')
                    ->badge()
                    ->searchable(),
                
                TextColumn::make('created_at')
                    ->label('Fecha de Solicitud')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
