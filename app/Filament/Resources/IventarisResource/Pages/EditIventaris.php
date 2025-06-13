<?php

namespace App\Filament\Resources\IventarisResource\Pages;

use App\Filament\Resources\IventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Traits\NotificationTrait;

class EditIventaris extends EditRecord
{
    protected static string $resource = IventarisResource::class;
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
