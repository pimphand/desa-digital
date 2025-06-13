<?php

namespace App\Filament\Resources\PengaduanResource\Pages;

use App\Filament\Resources\PengaduanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\NotificationTrait;

class CreatePengaduan extends CreateRecord
{
    protected static string $resource = PengaduanResource::class;
    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function afterCreate(): void
    {
        $this->sendSuccessNotification();
    }
}
