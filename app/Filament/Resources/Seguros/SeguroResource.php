<?php

namespace App\Filament\Resources\Seguros;

use App\Filament\Resources\Seguros\Pages\CreateSeguro;
use App\Filament\Resources\Seguros\Pages\EditSeguro;
use App\Filament\Resources\Seguros\Pages\ListSeguros;
use App\Filament\Resources\Seguros\Schemas\SeguroForm;
use App\Filament\Resources\Seguros\Tables\SegurosTable;
use App\Models\Seguro;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeguroResource extends Resource
{
    protected static ?string $model = Seguro::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SeguroForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SegurosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSeguros::route('/'),
            'create' => CreateSeguro::route('/create'),
            'edit' => EditSeguro::route('/{record}/edit'),
        ];
    }
}
