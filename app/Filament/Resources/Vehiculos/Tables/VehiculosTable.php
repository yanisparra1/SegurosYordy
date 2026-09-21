<?php

namespace App\Filament\Resources\Vehiculos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiculosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('placas')
                    ->searchable(),
                TextColumn::make('claseVehiculo.nombre')
                    ->label('Clase')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('marcaVehiculo.nombre')
                    ->label('Marca')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('modeloVehiculo.nombre')
                    ->label('Modelo')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('anio')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
