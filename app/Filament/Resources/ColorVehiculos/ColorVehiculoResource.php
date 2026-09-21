<?php

namespace App\Filament\Resources\ColorVehiculos;

use App\Filament\Resources\ColorVehiculos\Pages\CreateColorVehiculo;
use App\Filament\Resources\ColorVehiculos\Pages\EditColorVehiculo;
use App\Filament\Resources\ColorVehiculos\Pages\ListColorVehiculos;
use App\Filament\Resources\ColorVehiculos\Schemas\ColorVehiculoForm;
use App\Filament\Resources\ColorVehiculos\Tables\ColorVehiculosTable;
use App\Models\ColorVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ColorVehiculoResource extends Resource
{
    protected static ?string $model = ColorVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSwatch;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return ColorVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ColorVehiculosTable::configure($table);
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
            'index' => ListColorVehiculos::route('/'),
            'create' => CreateColorVehiculo::route('/create'),
            'edit' => EditColorVehiculo::route('/{record}/edit'),
        ];
    }
}
