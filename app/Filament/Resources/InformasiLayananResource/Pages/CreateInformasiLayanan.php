<?php

namespace App\Filament\Resources\InformasiLayananResource\Pages;

use App\Filament\Resources\InformasiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\NotificationTrait;

class CreateInformasiLayanan extends CreateRecord
{
    protected static string $resource = InformasiLayananResource::class;
    use \App\Traits\RedirectIndex;
    use NotificationTrait;

    protected function afterCreate(): void
    {
        $this->sendSuccessNotification();
    }
}
