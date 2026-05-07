<?php

namespace App\Filament\Resources\ProgramBansos\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BansosKabupatenRelationManager extends RelationManager
{
    protected static string $relationship = 'bansosKabupaten';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kabupaten')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('kabupaten')
            ->columns([
                TextColumn::make('program.name')->label('Nama Program'),
                TextColumn::make('kabupaten')->searchable()->label('Nama Kabupaten'),
                TextColumn::make('quota')->sortable(),
                TextColumn::make('distributed')->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
                AttachAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DetachAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
