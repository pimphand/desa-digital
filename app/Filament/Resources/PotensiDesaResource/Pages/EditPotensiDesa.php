<?php

namespace App\Filament\Resources\PotensiDesaResource\Pages;

use App\Filament\Resources\PotensiDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Traits\NotificationTrait;

class EditPotensiDesa extends EditRecord
{
    protected static string $resource = PotensiDesaResource::class;
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
