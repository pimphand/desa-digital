<?php

namespace App\Filament\Resources\ProfileDesaResource\Pages;

use App\Filament\Resources\ProfileDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfileDesa extends EditRecord
{
    protected static string $resource = ProfileDesaResource::class;

    //ambil data $first()

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
