<?php

namespace App\Filament\Resources\PotensiDesaResource\Pages;

use App\Filament\Resources\PotensiDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\NotificationTrait;

class CreatePotensiDesa extends CreateRecord
{
    protected static string $resource = PotensiDesaResource::class;
    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function afterCreate(): void
    {
        $this->sendSuccessNotification();
    }
}
