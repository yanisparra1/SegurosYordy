<?php

namespace App\Filament\Resources\ModeloVehiculos;

use App\Filament\Resources\ModeloVehiculos\Pages\CreateModeloVehiculo;
use App\Filament\Resources\ModeloVehiculos\Pages\EditModeloVehiculo;
use App\Filament\Resources\ModeloVehiculos\Pages\ListModeloVehiculos;
use App\Filament\Resources\ModeloVehiculos\Schemas\ModeloVehiculoForm;
use App\Filament\Resources\ModeloVehiculos\Tables\ModeloVehiculosTable;
use App\Models\ModeloVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ModeloVehiculoResource extends Resource
{
    protected static ?string $model = ModeloVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCube;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return ModeloVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ModeloVehiculosTable::configure($table);
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
            'index' => ListModeloVehiculos::route('/'),
            'create' => CreateModeloVehiculo::route('/create'),
            'edit' => EditModeloVehiculo::route('/{record}/edit'),
        ];
    }
}
