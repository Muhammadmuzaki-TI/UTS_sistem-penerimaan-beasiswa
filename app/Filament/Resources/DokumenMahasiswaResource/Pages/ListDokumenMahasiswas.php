<?php

namespace App\Filament\Resources\DokumenMahasiswaResource\Pages;

use App\Filament\Resources\DokumenMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumenMahasiswas extends ListRecords
{
    protected static string $resource = DokumenMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
