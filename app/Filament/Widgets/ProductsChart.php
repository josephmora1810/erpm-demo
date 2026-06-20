<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProductsChart extends ChartWidget
{
    protected ?string $heading = 'Distribución de Inventario por Categoría';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Unidades en stock',
                    'data' => [450, 300, 200, 150],
                    'backgroundColor' => [
                        '#aa0000', // Azul principal
                        '#10b981', // Verde
                        '#f59e0b', // Amarillo/Naranja
                        '#8b5cf6', // Violeta
                    ],
                ],
            ],
            'labels' => ['Electrónica', 'Oficina', 'Limpieza', 'Mantenimiento'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut'; // o 'doughnut' si prefieres que tenga un hueco en el centro
    }
}
