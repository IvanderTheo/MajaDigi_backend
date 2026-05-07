<?php

namespace App\Filament\Resources\ProgramBansos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProgramBansosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('name')->required(),
                TextInput::make('description->')->required(),
                TextInput::make('total_fund')->required(),
                TextInput::make('quota_total')->required(),
                TextInput::make('quota_distributed')->required(),
                TextInput::make('precentage'),
                TextInput::make('update_at'),
                TextInput::make('created_at'),
            ]);
    }
}
