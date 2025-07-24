<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\Sale;
use Filament\Tables;
use App\Models\Laporan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LaporanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaporanResource\RelationManagers;

class LaporanResource extends Resource
{
    protected static ?string $model = Sale::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Laporan';
    protected static ?int $navigationSort = 2;

    protected static ?string $pluralLabel = 'Laporan Penjualan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->formatStateUsing(fn($state) => Carbon::parse($state)->translatedFormat('j F Y')),
                Tables\Columns\TextColumn::make('product.name')->label('Kategori'),
                Tables\Columns\TextColumn::make('total_amount')
                    ->label('Total Bayar')
                    ->formatStateUsing(fn($state) => 'Rp. ' . number_format($state, 0, ',', ',')),
                Tables\Columns\TextColumn::make('fee')
                    ->label('Admin')
                    ->formatStateUsing(fn($state) => 'Rp. ' . number_format($state, 0, ',', ',')),
            ])

            // ->headerActions([
            //     ExportAction::make()
            //         ->label('Ekspor Data')
            //         ->fileName(fn() => 'Laporan-Penjualan-' . now()->format('Y-m-d'))
            //         ->exporter(XlsxExporter::make()), // pakai ->make()
            // ])
            ->filters([
                SelectFilter::make('month')
                    ->label('Bulan')
                    ->options([
                        '1' => 'Januari',
                        '2' => 'Februari',
                        '3' => 'Maret',
                        '4' => 'April',
                        '5' => 'Mei',
                        '6' => 'Juni',
                        '7' => 'Juli',
                        '8' => 'Agustus',
                        '9' => 'September',
                        '10' => 'Oktober',
                        '11' => 'November',
                        '12' => 'Desember',
                    ])
                    ->default(now()->format('n'))
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['value']) {
                            return $query->whereMonth('date', $data['value']);
                        }

                        return $query;
                    }),

                SelectFilter::make('year')
                    ->label('Tahun')
                    ->options(
                        collect(range(date('Y'), 2020))
                            ->mapWithKeys(fn($year) => [$year => $year])
                            ->toArray()
                    )
                    ->default(now()->format('Y'))
                    ->query(function (Builder $query, array $data): Builder {
                        if ($data['value']) {
                            return $query->whereYear('date', $data['value']);
                        }

                        return $query;
                    }),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLaporans::route('/'),
            'create' => Pages\CreateLaporan::route('/create'),
            'edit' => Pages\EditLaporan::route('/{record}/edit'),
        ];
    }
}
