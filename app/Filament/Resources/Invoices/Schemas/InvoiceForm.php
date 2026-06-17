<?php

namespace App\Filament\Resources\Invoices\Schemas;

use App\Enum\InvoiceType;
use App\Enum\Status;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class InvoiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->required(),
                Select::make('invoice_type')
                    ->options(InvoiceType::class)
                    ->required(),
                Select::make('customer_id')
                    ->relationship('customer', 'name'),
                Select::make('supplier_id')
                    ->relationship('supplier', 'name'),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(Status::class)
                    ->default('pending')
                    ->required(),
            ]);
    }
}
