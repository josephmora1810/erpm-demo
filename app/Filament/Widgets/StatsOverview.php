<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use App\Models\TravelRequest;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        
        return [
            Stat::make('Ingresos del Mes', '$ 24,500.00')
                ->description('32% de incremento vs mes anterior')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            // Métrica 2: Dato real de tu base de datos
            Stat::make('Empleados Activos', Employee::count())
                ->description('Personal registrado en sistema')
                ->descriptionIcon('heroicon-m-users')
                ->color('info'),

            // Métrica 3: Dato real con condición
            Stat::make('Viáticos Pendientes', TravelRequest::where('status', 'pending')->count())
                ->description('Solicitudes que requieren revisión')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('warning'),
        ];
    }
}
