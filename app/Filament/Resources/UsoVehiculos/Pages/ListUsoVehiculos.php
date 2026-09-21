<?php

namespace App\Filament\Resources\UsoVehiculos\Pages;

use App\Filament\Resources\UsoVehiculos\UsoVehiculoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUsoVehiculos extends ListRecords
{
    protected static string $resource = UsoVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
