<?php

namespace App\Filament\Resources\ProgramBansos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProgramBansosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable(),
                TextColumn::make('description->')->searchable(),
                TextColumn::make('total_fund')->sortable(),
                TextColumn::make('quota_total')->sortable(),
                TextColumn::make('quota_distributed')->sortable(),
                TextColumn::make('precentage')->sortable(),
                TextColumn::make('update_at')->sortable(),
                TextColumn::make('created_at')->sortable(),
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
