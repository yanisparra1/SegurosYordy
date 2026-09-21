<?php

namespace App\Filament\Resources\ClaseVehiculos\Pages;

use App\Filament\Resources\ClaseVehiculos\ClaseVehiculoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClaseVehiculos extends ListRecords
{
    protected static string $resource = ClaseVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
