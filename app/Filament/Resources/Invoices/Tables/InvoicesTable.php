<?php

namespace App\Filament\Resources\Invoices\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InvoicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number')
                    ->searchable()->label('numero'),
                TextColumn::make('invoice_type')
                    ->badge()
                    ->searchable()->label('tipo de factura'),
                TextColumn::make('customer.name')
                    ->searchable()->label('cliente'),
                TextColumn::make('supplier.name')
                    ->searchable()->label('proveedor'),
                TextColumn::make('total')
                    ->money('USD')
                    ->sortable()
                    ->summarize(Sum::make()->money('USD')->label('Total Pantalla')),
                TextColumn::make('status')
                    ->badge()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                Action::make('pdf')
                    ->label('factura PDF')
                    ->color('danger')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(fn ($record) => route('invoice.pdf', $record))
                    ->openUrlInNewTab(), // Crucial para que no lo saque del panel
                Action::make('retencion_iva')
                    ->label('Retención IVA')
                    ->color('warning')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => route('pdf.retencion-iva', $record))
                    ->openUrlInNewTab(),
                    //->visible(fn ($record) => $record->supplier_id !== null),
                Action::make('acta_perceptivo')
                    ->label('Acta Control Perceptivo')
                    ->color('success')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->url(fn ($record) => route('acta.control.perceptivo', $record))
                    ->openUrlInNewTab(),
                Action::make('finiquito')
                    ->label('Finiquito Contable')
                    ->color('warning')
                    ->icon('heroicon-o-check-badge')
                    ->url(fn ($record) => route('finiquito.contable', $record))
                    ->openUrlInNewTab(),
                    // ->visible(fn ($record) => $record->supplier_id !== null),
                Action::make('orden_pago')
                    ->label('Orden de Pago')
                    ->color('success')
                    ->icon('heroicon-o-credit-card')
                    ->url(fn ($record) => route('orden.pago.pdf', $record))
                    ->openUrlInNewTab(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);

    }
}
