<?php

namespace App\Filament\Resources\ClaseVehiculos\Schemas;

use Filament\Schemas\Schema;

class ClaseVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
