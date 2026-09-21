<?php

namespace App\Filament\Resources\ModeloVehiculos\Pages;

use App\Filament\Resources\ModeloVehiculos\ModeloVehiculoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListModeloVehiculos extends ListRecords
{
    protected static string $resource = ModeloVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
