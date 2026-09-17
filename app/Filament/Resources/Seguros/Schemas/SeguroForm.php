<?php

namespace App\Filament\Resources\Seguros\Schemas;

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
                    ->default(fn () => (\App\Models\Seguro::max('numero_seguro') ?? 0) + 1)
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
                        TextInput::make('placas')
                            ->required(),
                        TextInput::make('marca')
                            ->required(),
                        TextInput::make('modelo')
                            ->required(),
                        TextInput::make('anio')
                            ->required()
                            ->numeric(),
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
