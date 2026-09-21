<?php

namespace App\Filament\Widgets;

use App\Models\Seguro;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SegurosStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $total = Seguro::count();
        $porVencer = Seguro::whereBetween('fecha_vencimiento', [now(), now()->addDays(30)])->count();
        $vencidos = Seguro::where('fecha_vencimiento', '<', now())->count();

        return [
            Stat::make('Total Seguros', $total)
                ->description('Seguros activos en el sistema')
                ->descriptionIcon('heroicon-m-shield-check')
                ->color('success'),

            Stat::make('Por Vencer', $porVencer)
                ->description('Expiran en los próximos 30 días')
                ->descriptionIcon('heroicon-m-exclamation-triangle')
                ->color('warning'),

            Stat::make('Vencidos', $vencidos)
                ->description('Seguros que ya expiraron')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),
        ];
    }
}
