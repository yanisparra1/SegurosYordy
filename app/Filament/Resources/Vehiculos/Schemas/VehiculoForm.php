<?php

namespace App\Filament\Resources\Vehiculos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehiculoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('clase_vehiculo_id')
                    ->relationship('claseVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                Select::make('tipo_vehiculo_id')
                    ->relationship('tipoVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                Select::make('marca_vehiculo_id')
                    ->relationship('marcaVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                Select::make('modelo_vehiculo_id')
                    ->relationship('modeloVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                TextInput::make('carroceria')
                    ->maxLength(50),
                TextInput::make('motor')
                    ->required()
                    ->maxLength(50),
                TextInput::make('anio')
                    ->required()
                    ->numeric(),
                Select::make('color_vehiculo_id')
                    ->relationship('colorVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                TextInput::make('puesto')
                    ->maxLength(20),
                TextInput::make('peso')
                    ->numeric(),
                Select::make('uso_vehiculo_id')
                    ->relationship('usoVehiculo', 'nombre')
                    ->createOptionForm([TextInput::make('nombre')->required()])
                    ->editOptionForm([TextInput::make('nombre')->required()])
                    ->required(),
                TextInput::make('placas')
                    ->required()
                    ->maxLength(15),
            ]);
    }
}
