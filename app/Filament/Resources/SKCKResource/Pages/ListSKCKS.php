<?php

namespace App\Filament\Resources\SKCKResource\Pages;

use App\Filament\Resources\SKCKResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSKCKS extends ListRecords
{
    protected static string $resource = SKCKResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
