<?php

namespace App\Filament\Resources\ColorVehiculos\Schemas;

use Filament\Schemas\Schema;

class ColorVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
