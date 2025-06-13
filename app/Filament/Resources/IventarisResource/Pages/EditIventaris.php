<?php

namespace App\Filament\Resources\IventarisResource\Pages;

use App\Filament\Resources\IventarisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIventaris extends EditRecord
{
    protected static string $resource = IventarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
