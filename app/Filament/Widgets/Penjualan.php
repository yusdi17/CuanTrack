<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Sale;
use Filament\Widgets\ChartWidget;

class Penjualan extends ChartWidget
{
    protected static ?string $heading = 'Grafik Penjualan';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $sales = Sale::query()
            ->whereDate('date', '>=', now()->subDays(6))
            ->selectRaw('date, SUM(total_amount) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $dates->push(Carbon::today()->subDays($i)->toDateString());
        }

        $labels = $dates->map(fn ($date) => Carbon::parse($date)->translatedFormat('d M'));
        $values = $dates->map(function ($date) use ($sales) {
            return $sales->firstWhere('date', $date)?->total ?? 0;
        });
        return [
            'datasets' => [
                [
                    'label' => 'Penjualan',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
