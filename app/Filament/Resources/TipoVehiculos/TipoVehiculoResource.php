<?php

namespace App\Filament\Resources\TipoVehiculos;

use App\Filament\Resources\TipoVehiculos\Pages\CreateTipoVehiculo;
use App\Filament\Resources\TipoVehiculos\Pages\EditTipoVehiculo;
use App\Filament\Resources\TipoVehiculos\Pages\ListTipoVehiculos;
use App\Filament\Resources\TipoVehiculos\Schemas\TipoVehiculoForm;
use App\Filament\Resources\TipoVehiculos\Tables\TipoVehiculosTable;
use App\Models\TipoVehiculo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TipoVehiculoResource extends Resource
{
    protected static ?string $model = TipoVehiculo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquare3Stack3d;

    protected static string|\UnitEnum|null $navigationGroup = 'Configuración de Vehículos';


    public static function form(Schema $schema): Schema
    {
        return TipoVehiculoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TipoVehiculosTable::configure($table);
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
            'index' => ListTipoVehiculos::route('/'),
            'create' => CreateTipoVehiculo::route('/create'),
            'edit' => EditTipoVehiculo::route('/{record}/edit'),
        ];
    }
}
