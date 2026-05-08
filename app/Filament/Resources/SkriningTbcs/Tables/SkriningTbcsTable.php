<?php

namespace App\Filament\Resources\SkriningTbcs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SkriningTbcsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('skriningTbc.name')->searchable()->label('nama'),
                TextColumn::make('cough_duration')->searchable(),
                TextColumn::make('fever')->searchable(),
                TextColumn::make('weight_loss')->searchable(),
                TextColumn::make('night_sweat')->searchable(),
                TextColumn::make('screening_result')->searchable(),
                TextColumn::make('risk_level')->searchable(),
                TextColumn::make('score')->searchable(),
                TextColumn::make('screening_date')->searchable(),
                TextColumn::make('updated_at')->searchable(),
                TextColumn::make('created_at')->searchable(),
            ])
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
