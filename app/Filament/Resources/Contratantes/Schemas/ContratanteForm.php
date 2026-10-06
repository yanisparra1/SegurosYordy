<?php

namespace App\Filament\Resources\Contratantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContratanteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(static::fields());
    }

    /**
     * Campos del contratante. Se reutilizan en este recurso y en los modales
     * de crear/editar contratante dentro del formulario de Seguros.
     */
    public static function fields(): array
    {
        return [
            TextInput::make('nombre')
                ->required(),
            TextInput::make('apellido')
                ->required(),
            TextInput::make('cedula')
                ->required()
                ->unique(table: 'contratantes', column: 'cedula', ignoreRecord: true),
            TextInput::make('telefono')
                ->tel(),
            TextInput::make('direccion'),
        ];
    }
}
