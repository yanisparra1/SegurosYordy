<?php

namespace App\Filament\Resources\ClaseVehiculos\Pages;

use App\Filament\Resources\ClaseVehiculos\ClaseVehiculoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClaseVehiculo extends EditRecord
{
    protected static string $resource = ClaseVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
