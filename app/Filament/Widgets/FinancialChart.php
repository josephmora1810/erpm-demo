<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class FinancialChart extends ChartWidget
{
    
    // Esto lo pone debajo de las tarjetas de métricas
    protected static ?int $sort = 2;
    protected ?string $heading = 'Flujo de Caja (Ingresos vs Egresos 2026)';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
