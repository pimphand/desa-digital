<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Traits\NotificationTrait;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;
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
