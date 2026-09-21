<?php

namespace App\Filament\Resources\ColorVehiculos\Pages;

use App\Filament\Resources\ColorVehiculos\ColorVehiculoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditColorVehiculo extends EditRecord
{
    protected static string $resource = ColorVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
