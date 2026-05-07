<?php

namespace App\Filament\Resources\ProgramBansos\Pages;

use App\Filament\Resources\ProgramBansos\ProgramBansosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgramBansos extends ListRecords
{
    protected static string $resource = ProgramBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
