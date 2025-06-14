<?php

namespace App\Filament\Resources\SKCKResource\Pages;

use App\Filament\Resources\SKCKResource;
use App\Services\SKCKDocumentService;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditSKCK extends EditRecord
{
    protected static string $resource = SKCKResource::class;
    use \App\Traits\RedirectIndex;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Update the record with the provided data
        $service = new SKCKDocumentService;
        $record->update($data);
        $service->generateDocument($record);
        return $record;
    }
}
