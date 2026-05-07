<?php

namespace App\Filament\Resources\BansosKabupatens\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenerimaBansosRelationManager extends RelationManager
{
    protected static string $relationship = 'penerimaBansos';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_id')
            ->columns([
                TextColumn::make('bansosKabupaten.kabupaten')->label('nama Kabupaten'),
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
            ->headerActions([
                CreateAction::make(),
                AssociateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
