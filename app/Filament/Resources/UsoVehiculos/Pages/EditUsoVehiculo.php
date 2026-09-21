<?php

namespace App\Filament\Resources\UsoVehiculos\Pages;

use App\Filament\Resources\UsoVehiculos\UsoVehiculoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUsoVehiculo extends EditRecord
{
    protected static string $resource = UsoVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
