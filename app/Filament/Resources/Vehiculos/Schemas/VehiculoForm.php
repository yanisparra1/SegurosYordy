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
                TextInput::make('clase_vehiculo')
                    ->required()
                    ->maxLength(50),
                TextInput::make('tipo')
                    ->required()
                    ->maxLength(50),
                TextInput::make('marca')
                    ->required()
                    ->maxLength(50),
                TextInput::make('modelo')
                    ->required()
                    ->maxLength(50),
                TextInput::make('carroceria')
                    ->maxLength(50),
                TextInput::make('motor')
                    ->required()
                    ->maxLength(50),
                TextInput::make('anio')
                    ->required()
                    ->numeric(),
                TextInput::make('color')
                    ->required()
                    ->maxLength(30),
                TextInput::make('puesto')
                    ->maxLength(20),
                TextInput::make('peso')
                    ->numeric(),
                TextInput::make('uso')
                    ->required()
                    ->maxLength(50),
                TextInput::make('placas')
                    ->required()
                    ->maxLength(15),
            ]);
    }
}
