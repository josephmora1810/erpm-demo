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
                    'data' => [450, 300, 200, 150], // Cantidades por categoría
                    'backgroundColor' => [
                        '#3b82f6', // Azul
                        '#10b981', // Verde
                        '#f59e0b', // Amarillo
                        '#ef4444', // Rojo
                    ],
                ],
            ],
            'labels' => ['Electrónica', 'Oficina', 'Limpieza', 'Mantenimiento'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
