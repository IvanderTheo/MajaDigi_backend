<?php

namespace App\Filament\Resources\TransJatims;

use App\Filament\Resources\TransJatims\Pages\CreateTransJatim;
use App\Filament\Resources\TransJatims\Pages\EditTransJatim;
use App\Filament\Resources\TransJatims\Pages\ListTransJatims;
use App\Filament\Resources\TransJatims\RelationManagers\TransJatimDetailRelationManager;
use App\Filament\Resources\TransJatims\Schemas\TransJatimForm;
use App\Filament\Resources\TransJatims\Tables\TransJatimsTable;
use App\Models\TransJatim;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TransJatimResource extends Resource
{
    protected static ?string $model = TransJatim::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'route_name';

    public static function form(Schema $schema): Schema
    {
        return TransJatimForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransJatimsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            TransJatimDetailRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTransJatims::route('/'),
            'create' => CreateTransJatim::route('/create'),
            'edit' => EditTransJatim::route('/{record}/edit'),
        ];
    }
}
