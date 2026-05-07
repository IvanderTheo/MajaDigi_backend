<?php

namespace App\Filament\Resources\ProgramBansos;

use App\Filament\Resources\ProgramBansos\Pages\CreateProgramBansos;
use App\Filament\Resources\ProgramBansos\Pages\EditProgramBansos;
use App\Filament\Resources\ProgramBansos\Pages\ListProgramBansos;
use App\Filament\Resources\ProgramBansos\Schemas\ProgramBansosForm;
use App\Filament\Resources\ProgramBansos\Tables\ProgramBansosTable;
use App\Models\ProgramBansos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\ProgramBansos\RelationManagers\BansosKabupatenRelationManager;

class ProgramBansosResource extends Resource
{
    protected static ?string $model = ProgramBansos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ProgramBansosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramBansosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
            BansosKabupatenRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProgramBansos::route('/'),
            'create' => CreateProgramBansos::route('/create'),
            'edit' => EditProgramBansos::route('/{record}/edit'),
        ];
    }
}
