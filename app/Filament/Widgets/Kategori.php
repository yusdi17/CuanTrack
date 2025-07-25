<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class Kategori extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        $today = Carbon::today();

        $jumlahProduk = Product::count();

        $pendapatanKotor = Sale::whereDate('date', $today)->sum('total_amount');

        $pendapatanAdmin = Sale::whereDate('date', $today)->sum('fee');
        return [
            Stat::make('Jumlah Kategori', $jumlahProduk),
            Stat::make('Pendapatan Kotor Hari Ini', 'Rp ' . number_format($pendapatanKotor, 0, ',', '.')),
            Stat::make('Pendapatan Bersih Hari Ini', 'Rp ' . number_format($pendapatanAdmin, 0, ',', '.')),
        ];
    }
}
