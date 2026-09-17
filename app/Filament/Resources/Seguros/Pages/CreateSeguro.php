<?php

namespace App\Filament\Resources\Seguros\Pages;

use App\Filament\Resources\Seguros\SeguroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSeguro extends CreateRecord
{
    protected static string $resource = SeguroResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['fecha_creacion'])) {
            $data['fecha_vencimiento'] = \Carbon\Carbon::parse($data['fecha_creacion'])->addYear()->format('Y-m-d');
        }

        return $data;
    }
}
