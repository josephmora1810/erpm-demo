<?php

namespace App\Filament\Resources\TravelRequests\Schemas;

use App\Enum\TravelStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TravelRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_id')
                    ->required()
                    ->numeric(),
                TextInput::make('destination')
                    ->required(),
                Textarea::make('purpose')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('estimated_amount')
                    ->required()
                    ->numeric(),
                Select::make('status')
                    ->options(TravelStatus::class)
                    ->default('pending')
                    ->required(),
            ]);
    }
}
