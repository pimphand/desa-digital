<?php

namespace App\Filament\Resources\ProfileDesaResource\Pages;

use App\Filament\Resources\ProfileDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfileDesas extends ListRecords
{
    protected static string $resource = ProfileDesaResource::class;

    public function mount(): void
    {
        $profileDesa = \App\Models\ProfileDesa::first();

        if ($profileDesa) {
            // If a profile exists, redirect to the edit page
            redirect(static::getResource()::getUrl('edit', ['record' => $profileDesa]));
        } else {
            // If no profile exists, redirect to the create page
            redirect(static::getResource()::getUrl('create'));
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->visible(fn() => \App\Models\ProfileDesa::count() === 0)
                ->label('Tambah')
                ->icon('heroicon-o-plus')
                ->color('primary')
                ->tooltip('Tambah Profil Desa Baru'),
        ];
    }
}
