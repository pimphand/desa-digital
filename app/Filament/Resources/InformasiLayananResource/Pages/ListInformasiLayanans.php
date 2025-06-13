<?php

namespace App\Filament\Resources\InformasiLayananResource\Pages;

use App\Filament\Resources\InformasiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiLayanans extends ListRecords
{
    protected static string $resource = InformasiLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
