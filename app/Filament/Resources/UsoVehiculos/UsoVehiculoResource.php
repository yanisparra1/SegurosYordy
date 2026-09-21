<?php

namespace App\Filament\Resources\UsoVehiculos;

use App\Filament\Resources\UsoVehiculos\Pages\CreateUsoVehiculo;
use App\Filament\Resources\UsoVehiculos\Pages\EditUsoVehiculo;
use App\Filament\Resources\UsoVehiculos\Pages\ListUsoVehiculos;
use App\Filament\Resources\UsoVehiculos\Schemas\UsoVehiculoForm;
use App\Filament\Resources\UsoVehiculos\Tables\UsoVehiculosTable;
use App\Models\UsoVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UsoVehiculoResource extends Resource
{
    protected static ?string $model = UsoVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return UsoVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsoVehiculosTable::configure($table);
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
            'index' => ListUsoVehiculos::route('/'),
            'create' => CreateUsoVehiculo::route('/create'),
            'edit' => EditUsoVehiculo::route('/{record}/edit'),
        ];
    }
}
