<?php

namespace App\Traits;

use Filament\Notifications\Notification;

trait NotificationTrait
{
    protected function getSuccessNotificationTitle(): string
    {
        return match (true) {
            method_exists($this, 'afterCreate') => $this->getResource()::getModelLabel() . ' berhasil dibuat',
            method_exists($this, 'afterSave') => $this->getResource()::getModelLabel() . ' berhasil diperbarui',
            default => 'Operasi berhasil',
        };
    }

    protected function getSuccessNotificationBody(): string
    {
        return match (true) {
            method_exists($this, 'afterCreate') => $this->getResource()::getModelLabel() . ' baru telah berhasil dibuat.',
            method_exists($this, 'afterSave') => $this->getResource()::getModelLabel() . ' telah berhasil diperbarui.',
            default => 'Operasi telah berhasil dilakukan.',
        };
    }

    protected function sendSuccessNotification(): void
    {
        Notification::make()
            ->title($this->getSuccessNotificationTitle())
            ->success()
            ->body($this->getSuccessNotificationBody())
            ->send();
    }
}
