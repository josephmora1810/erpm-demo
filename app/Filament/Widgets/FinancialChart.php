<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class FinancialChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected ?string $heading = 'Flujo de Caja (Ingresos vs Egresos 2026)';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Ingresos',
                    'data' => [12500, 15000, 18000, 14000, 22000, 25000],
                    'backgroundColor' => '#10b981', // Verde (Éxito)
                ],
                [
                    'label' => 'Egresos',
                    'data' => [8000, 10500, 9000, 11000, 15000, 13500],
                    'backgroundColor' => '#ef4444', // Rojo (Peligro)
                ],
            ],
            'labels' => ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
