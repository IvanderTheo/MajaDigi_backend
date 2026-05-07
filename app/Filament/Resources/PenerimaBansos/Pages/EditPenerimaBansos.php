<?php

namespace App\Filament\Resources\PenerimaBansos\Pages;

use App\Filament\Resources\PenerimaBansos\PenerimaBansosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenerimaBansos extends EditRecord
{
    protected static string $resource = PenerimaBansosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
