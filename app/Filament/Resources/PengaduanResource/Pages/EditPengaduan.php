<?php

namespace App\Filament\Resources\PengaduanResource\Pages;

use App\Filament\Resources\PengaduanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EditPengaduan extends EditRecord
{
    protected static string $resource = PengaduanResource::class;
    use \App\Traits\RedirectIndex;


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // If there's a tanggapan and no petugas_id, set the current user as petugas
        if (!empty($data['tanggapan']) && empty($this->record->petugas_id)) {
            $data['petugas_id'] = Auth::user()->id;
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
