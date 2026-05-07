<?php

namespace App\Filament\Resources\ProgramBansos\Pages;

use App\Filament\Resources\ProgramBansos\ProgramBansosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgramBansos extends EditRecord
{
    protected static string $resource = ProgramBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
