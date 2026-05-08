<?php

namespace App\Filament\Resources\SkriningTbcs;

use App\Filament\Resources\SkriningTbcs\Pages\CreateSkriningTbc;
use App\Filament\Resources\SkriningTbcs\Pages\EditSkriningTbc;
use App\Filament\Resources\SkriningTbcs\Pages\ListSkriningTbcs;
use App\Filament\Resources\SkriningTbcs\Schemas\SkriningTbcForm;
use App\Filament\Resources\SkriningTbcs\Tables\SkriningTbcsTable;
use App\Models\SkriningTbc;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkriningTbcResource extends Resource
{
    protected static ?string $model = SkriningTbc::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'user_id';

    public static function form(Schema $schema): Schema
    {
        return SkriningTbcForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkriningTbcsTable::configure($table);
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
            'index' => ListSkriningTbcs::route('/'),
            'create' => CreateSkriningTbc::route('/create'),
            'edit' => EditSkriningTbc::route('/{record}/edit'),
        ];
    }
}
