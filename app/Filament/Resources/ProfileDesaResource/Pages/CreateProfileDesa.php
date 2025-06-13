<?php

namespace App\Filament\Resources\ProfileDesaResource\Pages;

use App\Filament\Resources\ProfileDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfileDesa extends CreateRecord
{
    protected static string $resource = ProfileDesaResource::class;
    use \App\Traits\RedirectIndex;

    protected function getFormActions(): array
    {
        return [
            Actions\CreateAction::make('save')
                ->label('Simpan')
                ->submit('create')
                ->color('success')
                ->icon('heroicon-o-check'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
