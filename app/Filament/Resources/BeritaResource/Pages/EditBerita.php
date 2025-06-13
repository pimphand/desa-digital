<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Traits\NotificationTrait;

class EditBerita extends EditRecord
{
    protected static string $resource = BeritaResource::class;
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
