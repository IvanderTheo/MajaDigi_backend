<?php

namespace App\Filament\Resources\SkriningTbcs\Pages;

use App\Filament\Resources\SkriningTbcs\SkriningTbcResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSkriningTbcs extends ListRecords
{
    protected static string $resource = SkriningTbcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
