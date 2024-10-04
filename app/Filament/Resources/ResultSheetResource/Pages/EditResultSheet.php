<?php

namespace App\Filament\Resources\ResultSheetResource\Pages;

use App\Filament\Resources\ResultSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResultSheet extends EditRecord
{
    protected static string $resource = ResultSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
