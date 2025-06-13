<?php

namespace App\Traits;

use Filament\Notifications\Notification;

trait RedirectIndex
{
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return null;
    }
}
