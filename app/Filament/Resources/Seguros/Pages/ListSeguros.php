<?php

namespace App\Filament\Resources\Seguros\Pages;

use App\Filament\Resources\Seguros\SeguroResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeguros extends ListRecords
{
    protected static string $resource = SeguroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
