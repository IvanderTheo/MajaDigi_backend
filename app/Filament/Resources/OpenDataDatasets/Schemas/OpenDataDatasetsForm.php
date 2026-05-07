<?php

namespace App\Filament\Resources\OpenDataDatasets\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OpenDataDatasetsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')->required(),
                TextInput::make('description')->required(),
                TextInput::make('caategory')->required(),
                TextInput::make('source_agency')->required(),
                TextInput::make('dataset_url')->required(),
            ]);
    }
}
