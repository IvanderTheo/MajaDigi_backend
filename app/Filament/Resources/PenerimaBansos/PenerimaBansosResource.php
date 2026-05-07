<?php

namespace App\Filament\Resources\PenerimaBansos;

use App\Filament\Resources\PenerimaBansos\Pages\CreatePenerimaBansos;
use App\Filament\Resources\PenerimaBansos\Pages\EditPenerimaBansos;
use App\Filament\Resources\PenerimaBansos\Pages\ListPenerimaBansos;
use App\Filament\Resources\PenerimaBansos\Schemas\PenerimaBansosForm;
use App\Filament\Resources\PenerimaBansos\Tables\PenerimaBansosTable;
use App\Models\PenerimaBansos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenerimaBansosResource extends Resource
{
    protected static ?string $model = PenerimaBansos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PenerimaBansosForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenerimaBansosTable::configure($table);
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
            'index' => ListPenerimaBansos::route('/'),
            'create' => CreatePenerimaBansos::route('/create'),
            'edit' => EditPenerimaBansos::route('/{record}/edit'),
        ];
    }
}
