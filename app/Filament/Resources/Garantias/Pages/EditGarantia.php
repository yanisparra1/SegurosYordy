<?php

namespace App\Filament\Resources\Garantias\Pages;

use App\Filament\Resources\Garantias\GarantiaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGarantia extends EditRecord
{
    protected static string $resource = GarantiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
