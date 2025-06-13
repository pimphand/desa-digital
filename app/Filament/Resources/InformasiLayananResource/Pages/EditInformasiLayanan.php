<?php

namespace App\Filament\Resources\InformasiLayananResource\Pages;

use App\Filament\Resources\InformasiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Traits\NotificationTrait;

class EditInformasiLayanan extends EditRecord
{
    protected static string $resource = InformasiLayananResource::class;
    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $this->sendSuccessNotification();
    }
}
