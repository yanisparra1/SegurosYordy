<?php

namespace App\Filament\Resources\ModeloVehiculos\Pages;

use App\Filament\Resources\ModeloVehiculos\ModeloVehiculoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditModeloVehiculo extends EditRecord
{
    protected static string $resource = ModeloVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
