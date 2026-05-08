<?php

namespace App\Filament\Resources\SkriningTbcs\Pages;

use App\Filament\Resources\SkriningTbcs\SkriningTbcResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSkriningTbc extends EditRecord
{
    protected static string $resource = SkriningTbcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
