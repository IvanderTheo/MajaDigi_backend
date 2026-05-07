<?php

namespace App\Filament\Resources\BansosKabupatens;

use App\Filament\Resources\BansosKabupatens\Pages\CreateBansosKabupaten;
use App\Filament\Resources\BansosKabupatens\Pages\EditBansosKabupaten;
use App\Filament\Resources\BansosKabupatens\Pages\ListBansosKabupatens;
use App\Filament\Resources\BansosKabupatens\Schemas\BansosKabupatenForm;
use App\Filament\Resources\BansosKabupatens\Tables\BansosKabupatensTable;
use App\Models\BansosKabupaten;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\BansosKabupatens\RelationManagers\PenerimaBansosRelationManager;

class BansosKabupatenResource extends Resource
{
    protected static ?string $model = BansosKabupaten::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'kabupaten';

    public static function form(Schema $schema): Schema
    {
        return BansosKabupatenForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BansosKabupatensTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            PenerimaBansosRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBansosKabupatens::route('/'),
            'create' => CreateBansosKabupaten::route('/create'),
            'edit' => EditBansosKabupaten::route('/{record}/edit'),
        ];
    }
}
