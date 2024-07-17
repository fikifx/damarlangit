<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Katalog;
use App\Models\Periode;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use Filament\Support\Enums\IconPosition;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();

        if ($user->hasRole('Member')) {
            // Jika user memiliki role 'Member', tampilkan statistik Katalog Terdaftar dan Total Periode
            $katalogTerdaftar = Katalog::where('kd_user', $user->id)->count();
            $totalPeriode = Periode::count();

            $formatNumber = function (int $number): string {
                return number_format($number);
            };

            return [
                
                Stat::make('Katalog Terdaftar', $formatNumber($katalogTerdaftar))
                    ->description('Jumlah total katalog yang sudah terdaftar')
                    ->descriptionIcon('heroicon-m-arrow-trending-up')
                    ->chart([7, 2, 15, 3, 19, 4, 26])
                    ->color('danger'),

                Stat::make('Total Periode', $formatNumber($totalPeriode))
                    ->description('Jumlah total periode yang sudah terdistribusi')
                    ->descriptionIcon('heroicon-m-arrow-trending-up')
                    ->chart([7, 2, 10, 3, 15, 4, 17])
                    ->color('info'),

                // Stat::make('Unique views', '192.1k')
                //     ->description('32k increase')
                //     ->descriptionIcon('heroicon-m-arrow-trending-up')
                //     ->chart([7, 2, 10, 3, 15, 4, 17])
                //     ->color('success'),

            ];
        } else {
            // Jika user bukan 'Member', tampilkan semua statistik
            $totalKomposer = User::count();
            $katalogTerdaftar = Katalog::count();
            $totalPeriode = Periode::count();

            $formatNumber = function (int $number): string {
                return number_format($number);
            };

        return [
            Stat::make('Total Komposer', $formatNumber($totalKomposer))
                ->description('Jumlah total komposer yang  terdaftar')
                ->color('success'),

                Stat::make('Katalog Terdaftar', $formatNumber($katalogTerdaftar))
                    ->description('Jumlah total katalog yang sudah terdaftar')
                    ->descriptionIcon('heroicon-m-arrow-trending-up')
                    ->chart([7, 2, 10, 3, 15, 4, 17])
                    ->color('danger'),

                Stat::make('Total Periode', $formatNumber($totalPeriode))
                    ->description('Jumlah total periode yang sudah terdistribusi')
                    ->descriptionIcon('heroicon-m-arrow-trending-up')
                    ->chart([7, 2, 10, 3, 15, 4, 17])
                    ->color('info'),
            ];
        }
    }
}
