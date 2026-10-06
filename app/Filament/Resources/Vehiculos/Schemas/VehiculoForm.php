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
            ->components(static::fields());
    }

    /**
     * Campos del vehículo. Se reutilizan en este recurso y en los modales
     * de crear/editar vehículo dentro del formulario de Seguros.
     */
    public static function fields(): array
    {
        return [
            Select::make('clase_vehiculo_id')
                ->relationship('claseVehiculo', 'nombre')
                ->createOptionForm([TextInput::make('nombre')->required()])
                ->editOptionForm([TextInput::make('nombre')->required()])
                ->searchable()
                ->preload()
                ->required(),
            Select::make('tipo_vehiculo_id')
                ->relationship('tipoVehiculo', 'nombre')
                ->createOptionForm([TextInput::make('nombre')->required()])
                ->editOptionForm([TextInput::make('nombre')->required()])
                ->searchable()
                ->preload()
                ->required(),
            Select::make('marca_vehiculo_id')
                ->relationship('marcaVehiculo', 'nombre')
                ->createOptionForm([TextInput::make('nombre')->required()])
                ->editOptionForm([TextInput::make('nombre')->required()])
                ->searchable()
                ->preload()
                ->required(),
            Select::make('modelo_vehiculo_id')
                ->relationship('modeloVehiculo', 'nombre')
                ->createOptionForm([TextInput::make('nombre')->required()])
                ->editOptionForm([TextInput::make('nombre')->required()])
                ->searchable()
                ->preload()
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
                ->searchable()
                ->preload()
                ->required(),
            TextInput::make('puesto')
                ->maxLength(20),
            TextInput::make('peso')
                ->numeric(),
            Select::make('uso_vehiculo_id')
                ->relationship('usoVehiculo', 'nombre')
                ->createOptionForm([TextInput::make('nombre')->required()])
                ->editOptionForm([TextInput::make('nombre')->required()])
                ->searchable()
                ->preload()
                ->required(),
            TextInput::make('placas')
                ->required()
                ->maxLength(15)
                ->unique(table: 'vehiculos', column: 'placas', ignoreRecord: true),
        ];
    }
}
