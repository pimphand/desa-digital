<?php

namespace App\Filament\Resources\InformasiLayananResource\Pages;

use App\Filament\Resources\InformasiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewInformasiLayanan extends ViewRecord
{
    protected static string $resource = InformasiLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
