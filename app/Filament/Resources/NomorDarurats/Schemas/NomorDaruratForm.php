<?php

namespace App\Filament\Resources\NomorDarurats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NomorDaruratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('service_name')->required(),
                TextInput::make('phone_number')->required(),
                TextInput::make('description')->required(),
            ]);
    }
}
