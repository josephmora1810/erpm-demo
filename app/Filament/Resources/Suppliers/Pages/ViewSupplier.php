<?php

namespace App\Filament\Resources\Suppliers\Pages;

use App\Filament\Resources\Suppliers\SupplierResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSupplier extends ViewRecord
{
    protected static string $resource = SupplierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
            ->label('Back')
            ->icon('heroicon-o-arrow-left')
            ->color('gray')
            ->url(SupplierResource::getUrl('index')),
            EditAction::make(),
        ];
    }
}
