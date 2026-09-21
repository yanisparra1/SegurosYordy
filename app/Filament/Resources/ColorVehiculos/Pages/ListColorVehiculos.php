<?php

namespace App\Filament\Resources\ColorVehiculos\Pages;

use App\Filament\Resources\ColorVehiculos\ColorVehiculoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListColorVehiculos extends ListRecords
{
    protected static string $resource = ColorVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
