<?php

namespace App\Filament\Resources\SuratResource\Pages;

use App\Filament\Resources\SuratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListSurats extends ListRecords
{
    protected static string $resource = SuratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Semua Surat')
                ->badge(SuratResource::getModel()::count()),
            'active' => Tab::make('Aktif')
                ->badge(SuratResource::getModel()::where('is_active', true)->count())
                ->modifyQueryUsing(fn($query) => $query->where('is_active', true)),
            'inactive' => Tab::make('Tidak Aktif')
                ->badge(SuratResource::getModel()::where('is_active', false)->count())
                ->modifyQueryUsing(fn($query) => $query->where('is_active', false)),
        ];
    }
}
