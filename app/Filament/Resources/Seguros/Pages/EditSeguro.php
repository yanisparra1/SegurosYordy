<?php

namespace App\Filament\Resources\Seguros\Pages;

use App\Filament\Resources\Seguros\SeguroResource;
use Carbon\Carbon;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeguro extends EditRecord
{
    protected static string $resource = SeguroResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['fecha_creacion'])) {
            $data['fecha_vencimiento'] = Carbon::parse($data['fecha_creacion'])->addYear()->format('Y-m-d');
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
