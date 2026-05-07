<?php

namespace App\Filament\Resources\BansosKabupatens\Pages;

use App\Filament\Resources\BansosKabupatens\BansosKabupatenResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBansosKabupatens extends ListRecords
{
    protected static string $resource = BansosKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
