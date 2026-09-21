<?php

namespace App\Filament\Resources\MarcaVehiculos;

use App\Filament\Resources\MarcaVehiculos\Pages\CreateMarcaVehiculo;
use App\Filament\Resources\MarcaVehiculos\Pages\EditMarcaVehiculo;
use App\Filament\Resources\MarcaVehiculos\Pages\ListMarcaVehiculos;
use App\Filament\Resources\MarcaVehiculos\Schemas\MarcaVehiculoForm;
use App\Filament\Resources\MarcaVehiculos\Tables\MarcaVehiculosTable;
use App\Models\MarcaVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MarcaVehiculoResource extends Resource
{
    protected static ?string $model = MarcaVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return MarcaVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MarcaVehiculosTable::configure($table);
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
            'index' => ListMarcaVehiculos::route('/'),
            'create' => CreateMarcaVehiculo::route('/create'),
            'edit' => EditMarcaVehiculo::route('/{record}/edit'),
        ];
    }
}
