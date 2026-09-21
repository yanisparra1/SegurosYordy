<?php

namespace App\Filament\Resources\UsoVehiculos\Schemas;

use Filament\Schemas\Schema;

class UsoVehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('nombre')->required()->maxLength(255),
            ]);
    }
}
