<?php

namespace App\Filament\Resources\TravelRequests;

use App\Filament\Resources\TravelRequests\Pages\CreateTravelRequest;
use App\Filament\Resources\TravelRequests\Pages\EditTravelRequest;
use App\Filament\Resources\TravelRequests\Pages\ListTravelRequests;
use App\Filament\Resources\TravelRequests\Schemas\TravelRequestForm;
use App\Filament\Resources\TravelRequests\Tables\TravelRequestsTable;
use App\Models\TravelRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TravelRequestResource extends Resource
{
    protected static ?string $model = TravelRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Map;
    protected static string|UnitEnum|null $navigationGroup = "Recursos Humanos";

    public static function form(Schema $schema): Schema
    {
        return TravelRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TravelRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTravelRequests::route('/'),
            'create' => CreateTravelRequest::route('/create'),
            'edit' => EditTravelRequest::route('/{record}/edit'),
        ];
    }
    public static function getModelLabel(): string
    {
        return 'solicitud de viaje'; // Nombre en singular
    }

    public static function getPluralModelLabel(): string
    {
        return 'solicitudes de viaje'; // Nombre en plural para el menú
    }

    public static function getNavigationLabel(): string
    {
        return 'Viáticos'; // En el menú lateral dirá "Viáticos" en vez de "Solicitudes de viaje"
    }
}
