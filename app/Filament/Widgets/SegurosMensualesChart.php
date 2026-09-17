<?php

namespace App\Filament\Widgets;

use App\Models\Seguro;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class SegurosMensualesChart extends ChartWidget
{
    protected ?string $heading = 'Seguros Añadidos (Este Año)';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $seguros = Seguro::whereYear('fecha_creacion', now()->year)->get();
        $data = [];
        foreach(range(1, 12) as $month) {
            $data[] = $seguros->filter(fn($s) => Carbon::parse($s->fecha_creacion)->month === $month)->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Seguros Registrados',
                    'data' => $data,
                    'backgroundColor' => '#f59e0b',
                    'borderColor' => '#f59e0b',
                ],
            ],
            'labels' => ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
