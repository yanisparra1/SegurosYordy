<?php

namespace App\Filament\Resources\Garantias;

use App\Filament\Resources\Garantias\Pages\CreateGarantia;
use App\Filament\Resources\Garantias\Pages\EditGarantia;
use App\Filament\Resources\Garantias\Pages\ListGarantias;
use App\Filament\Resources\Garantias\Schemas\GarantiaForm;
use App\Filament\Resources\Garantias\Tables\GarantiasTable;
use App\Models\Garantia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GarantiaResource extends Resource
{
    protected static ?string $model = Garantia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentCheck;

    public static function form(Schema $schema): Schema
    {
        return GarantiaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GarantiasTable::configure($table);
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
            'index' => ListGarantias::route('/'),
            'create' => CreateGarantia::route('/create'),
            'edit' => EditGarantia::route('/{record}/edit'),
        ];
    }
}
