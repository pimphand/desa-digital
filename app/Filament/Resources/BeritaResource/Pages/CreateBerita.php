<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use App\Filament\Resources\BeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\NotificationTrait;

class CreateBerita extends CreateRecord
{
    protected static string $resource = BeritaResource::class;

    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function afterCreate(): void
    {
        $this->sendSuccessNotification();
    }
}
