<?php

namespace App\Filament\Resources\KeuanganResource\Pages;

use App\Filament\Resources\KeuanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeuangan extends EditRecord
{
    protected static string $resource = KeuanganResource::class;
    use \App\Traits\RedirectIndex;


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
