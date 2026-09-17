<?php

namespace App\Filament\Resources\Contratantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContratanteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('cedula')
                    ->required(),
                TextInput::make('telefono')
                    ->tel(),
                TextInput::make('direccion'),
            ]);
    }
}
