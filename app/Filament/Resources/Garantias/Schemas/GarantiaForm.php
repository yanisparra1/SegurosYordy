<?php

namespace App\Filament\Resources\Garantias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GarantiaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric(),
            ]);
    }
}
