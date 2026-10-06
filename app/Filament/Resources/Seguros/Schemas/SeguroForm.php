<?php

namespace App\Filament\Resources\Seguros\Schemas;

use App\Filament\Resources\Contratantes\Schemas\ContratanteForm;
use App\Filament\Resources\Vehiculos\Schemas\VehiculoForm;
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
                // Crear (+) y editar (lápiz) el contratante sin salir del seguro.
                // Los campos vienen de ContratanteForm para no duplicarlos.
                Select::make('contratante_id')
                    ->relationship('contratante', 'nombre')
                    ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->nombre} {$record->apellido} - {$record->cedula}")
                    ->required()
                    ->searchable(['nombre', 'apellido', 'cedula'])
                    ->preload()
                    ->createOptionForm(ContratanteForm::fields())
                    ->editOptionForm(ContratanteForm::fields()),
                // Crear (+) y editar (lápiz) el vehículo sin salir del seguro.
                // Ojo: editar aquí modifica el vehículo en todos los seguros que lo usan.
                Select::make('vehiculo_id')
                    ->relationship('vehiculo', 'placas')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm(VehiculoForm::fields())
                    ->editOptionForm(VehiculoForm::fields()),
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
