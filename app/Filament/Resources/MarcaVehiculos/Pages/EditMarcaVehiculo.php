<?php

namespace App\Filament\Resources\MarcaVehiculos\Pages;

use App\Filament\Resources\MarcaVehiculos\MarcaVehiculoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMarcaVehiculo extends EditRecord
{
    protected static string $resource = MarcaVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
