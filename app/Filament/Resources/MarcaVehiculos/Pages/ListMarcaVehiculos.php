<?php

namespace App\Filament\Resources\MarcaVehiculos\Pages;

use App\Filament\Resources\MarcaVehiculos\MarcaVehiculoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMarcaVehiculos extends ListRecords
{
    protected static string $resource = MarcaVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
