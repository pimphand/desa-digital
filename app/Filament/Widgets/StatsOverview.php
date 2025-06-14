<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\Iventaris;
use App\Models\Keuangan;
use App\Models\Pengaduan;
use App\Models\Potensi;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Inventaris', Iventaris::count())
                ->description('Total aset desa')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('success'),

            Stat::make('Total Keuangan', 'Rp ' . number_format(Keuangan::sum('jumlah'), 0, ',', '.'))
                ->description('Total transaksi keuangan')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('warning'),

            Stat::make('Pengaduan Aktif', Pengaduan::where('show_to_public', true)->count())
                ->description('Pengaduan yang ditampilkan')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('danger'),

            Stat::make('Potensi Desa', Potensi::count())
                ->description('Total potensi yang terdaftar')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('info'),

            Stat::make('Berita Terbaru', Berita::count())
                ->description('Total berita desa')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('primary'),
        ];
    }
}
