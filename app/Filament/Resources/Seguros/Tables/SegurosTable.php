<?php

namespace App\Filament\Resources\Seguros\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SegurosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero_seguro')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('contratante.nombre')
                    ->searchable(),
                TextColumn::make('vehiculo.placas')
                    ->searchable(),
                TextColumn::make('garantia.nombre')
                    ->searchable(),
                TextColumn::make('fecha_creacion')
                    ->date()
                    ->sortable(),
                TextColumn::make('fecha_vencimiento')
                    ->date()
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
            ->defaultSort('numero_seguro', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('Descargar PDF')
                    ->color('success')
                    ->icon('heroicon-s-cloud-arrow-down')
                    ->url(
                        fn ($record) => route('pdf.example', ['user' => $record->numero_seguro]),
                        shouldOpenInNewTab: true
                    ),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
