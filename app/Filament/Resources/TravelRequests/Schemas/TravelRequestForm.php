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
                Select::make('employee_id')
                    ->label('Empleado')
                    ->relationship('employee', 'name')
                    ->required()
                    ->searchable() // Útil si tienes muchos empleados
                    ->preload(),
                
                TextInput::make('destination')
                    ->label('Destino')
                    ->required(),
                
                Textarea::make('purpose')
                    ->label('Propósito del Viaje')
                    ->required()
                    ->columnSpanFull(),
                
                TextInput::make('estimated_amount')
                    ->label('Monto Estimado')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                
                Select::make('status')
                    ->label('Estado de la Solicitud')
                    ->options(TravelStatus::class)
                    ->default(TravelStatus::Pending->value)
                    ->required()
                    ->disabled(),
            ]);
    }
}
