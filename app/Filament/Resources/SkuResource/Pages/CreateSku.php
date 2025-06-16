<?php

namespace App\Filament\Resources\SkuResource\Pages;

use App\Filament\Resources\SkuResource;
use App\Services\SKUDocumentService;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateSku extends CreateRecord
{
    protected static string $resource = SkuResource::class;

    use \App\Traits\RedirectIndex;


    protected function handleRecordCreation(array $data): Model
    {
        $record = static::getModel()::create($data);
        // Update the record with the provided data
        $service = new SKUDocumentService;
        $service->generateDocument($record);
        return $record;
    }
}
