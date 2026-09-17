<?php

namespace App\Filament\Resources\Vehiculos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('placas')
                    ->required(),
                TextInput::make('marca')
                    ->required(),
                TextInput::make('modelo')
                    ->required(),
                TextInput::make('anio')
                    ->required()
                    ->numeric(),
            ]);
    }
}
