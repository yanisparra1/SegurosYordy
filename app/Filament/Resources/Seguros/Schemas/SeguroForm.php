<?php

namespace App\Filament\Resources\Seguros\Schemas;

use App\Models\Seguro;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SeguroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numero_seguro')
                    ->default(fn () => (Seguro::max('numero_seguro') ?? 0) + 1)
                    ->readOnly()
                    ->numeric(),
                Select::make('contratante_id')
                    ->relationship('contratante', 'nombre')
                    ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->nombre} {$record->apellido} - {$record->cedula}")
                    ->required()
                    ->searchable(['nombre', 'apellido', 'cedula'])
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nombre')
                            ->required(),
                        TextInput::make('apellido')
                            ->required(),
                        TextInput::make('cedula')
                            ->required(),
                        TextInput::make('telefono')
                            ->tel(),
                        TextInput::make('direccion'),
                    ]),
                Select::make('vehiculo_id')
                    ->relationship('vehiculo', 'placas')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
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
                            ->maxLength(15),
                    ]),
                Select::make('garantia_id')
                    ->relationship('garantia', 'nombre')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nombre')
                            ->required(),
                        TextInput::make('total')
                            ->required()
                            ->numeric(),
                    ])
                    ->editOptionForm([
                        TextInput::make('nombre')
                            ->required(),
                        TextInput::make('total')
                            ->required()
                            ->numeric(),
                    ]),
                DatePicker::make('fecha_creacion')
                    ->default(now())
                    ->required(),
            ]);
    }
}
