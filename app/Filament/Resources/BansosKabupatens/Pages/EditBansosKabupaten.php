<?php

namespace App\Filament\Resources\BansosKabupatens\Pages;

use App\Filament\Resources\BansosKabupatens\BansosKabupatenResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBansosKabupaten extends EditRecord
{
    protected static string $resource = BansosKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
