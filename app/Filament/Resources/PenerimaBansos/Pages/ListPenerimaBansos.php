<?php

namespace App\Filament\Resources\PenerimaBansos\Pages;

use App\Filament\Resources\PenerimaBansos\PenerimaBansosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenerimaBansos extends ListRecords
{
    protected static string $resource = PenerimaBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
