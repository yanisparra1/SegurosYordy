<?php

namespace App\Filament\Resources\ClaseVehiculos;

use App\Filament\Resources\ClaseVehiculos\Pages\CreateClaseVehiculo;
use App\Filament\Resources\ClaseVehiculos\Pages\EditClaseVehiculo;
use App\Filament\Resources\ClaseVehiculos\Pages\ListClaseVehiculos;
use App\Filament\Resources\ClaseVehiculos\Schemas\ClaseVehiculoForm;
use App\Filament\Resources\ClaseVehiculos\Tables\ClaseVehiculosTable;
use App\Models\ClaseVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClaseVehiculoResource extends Resource
{
    protected static ?string $model = ClaseVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return ClaseVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClaseVehiculosTable::configure($table);
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
            'index' => ListClaseVehiculos::route('/'),
            'create' => CreateClaseVehiculo::route('/create'),
            'edit' => EditClaseVehiculo::route('/{record}/edit'),
        ];
    }
}
