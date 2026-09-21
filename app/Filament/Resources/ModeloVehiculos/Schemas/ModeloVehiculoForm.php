<?php

namespace App\Filament\Resources\ModeloVehiculos\Schemas;

use Filament\Schemas\Schema;

class ModeloVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
