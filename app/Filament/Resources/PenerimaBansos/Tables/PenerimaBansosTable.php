<?php

namespace App\Filament\Resources\PenerimaBansos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenerimaBansosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('user.name')->label('nama')->searchable(),
                TextColumn::make('user.email')->label('email')->searchable()->default('-'),
                TextColumn::make('user.phone_number')->label('no. telp')->searchable()->default('-'),
                TextColumn::make('user.address')->label('alamat')->searchable()->default('-'),
                TextColumn::make('bansosKabupaten.program.name')->searchable(),
                TextColumn::make('bansosKabupaten.kabupaten')->label('kabupaten')->searchable(),
                TextColumn::make('amount')->sortable(),
                TextColumn::make('status'),
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),
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
