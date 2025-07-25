<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Sale;
use Filament\Widgets\ChartWidget;

class AdminFee extends ChartWidget
{
    protected static ?string $heading = 'Grafik Pendapatan';
    protected static ?int $sort = 2;
    protected static string $color = 'success';

    protected function getData(): array
    {
        $fees = Sale::query()
            ->whereDate('date', '>=', now()->subDays(6))
            ->selectRaw('date, SUM(fee) as total_fee')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $dates->push(Carbon::today()->subDays($i)->toDateString());
        }

        $labels = $dates->map(fn ($date) => Carbon::parse($date)->translatedFormat('d M'));
        $data = $dates->map(function ($date) use ($fees) {
            return $fees->firstWhere('date', $date)?->total_fee ?? 0;
        });
        return [
            'datasets' => [
                [
                    'label' => 'Total Fee Admin',
                    'data' => $data,
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
