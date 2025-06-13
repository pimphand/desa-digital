<?php

namespace App\Filament\Resources\IventarisResource\Pages;

use App\Filament\Resources\IventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\NotificationTrait;

class CreateIventaris extends CreateRecord
{
    protected static string $resource = IventarisResource::class;
    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function afterCreate(): void
    {
        $this->sendSuccessNotification();
    }
}
