<?php

namespace App\Filament\Resources\MarcaVehiculos\Schemas;

use Filament\Schemas\Schema;

class MarcaVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
