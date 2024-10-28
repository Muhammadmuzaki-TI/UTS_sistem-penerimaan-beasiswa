<?php

namespace App\Filament\Resources\KriteriaBeasiswaResource\Pages;

use App\Filament\Resources\KriteriaBeasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKriteriaBeasiswa extends EditRecord
{
    protected static string $resource = KriteriaBeasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
