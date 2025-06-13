<?php

namespace App\Filament\Resources\InformasiLayananResource\Pages;

use App\Filament\Resources\InformasiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiLayanan extends EditRecord
{
    protected static string $resource = InformasiLayananResource::class;
    use \App\Traits\RedirectIndex;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
