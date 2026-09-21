<?php

namespace App\Filament\Resources\TipoVehiculos\Schemas;

use Filament\Schemas\Schema;

class TipoVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
