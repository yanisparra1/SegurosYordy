<?php

namespace App\Filament\Resources\Garantias\Pages;

use App\Filament\Resources\Garantias\GarantiaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGarantias extends ListRecords
{
    protected static string $resource = GarantiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
