<?php

namespace App\Filament\Widgets;

use App\Models\Royalti;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class TotalOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();

        if ($user->hasRole('Member')) {
            $totalGeneral = Royalti::where('kd_user', $user->id)->sum('general');
            $totalOptimasi = Royalti::where('kd_user', $user->id)->sum('optimasi');
            $totalPending = Royalti::where('kd_user', $user->id)->sum('pending');
        } else {
            $totalGeneral = Royalti::sum('general');
            $totalOptimasi = Royalti::sum('optimasi');
            $totalPending = Royalti::sum('pending');
        }

        $formatNumber = function (float $number): string {
            return 'Rp' . number_format($number, 2, ',', '.'); 
        };

        return [
            Stat::make('Total Laporan General', $formatNumber($totalGeneral))
                ->description('Jumlah total nilai general')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 25, 3, 39, 4, 46])
                ->color('info'), 

            Stat::make('Total Laporan Optimasi', $formatNumber($totalOptimasi))
                ->description('Jumlah total nilai optimasi')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([3, 2, 19, 3, 29, 4, 36])
                ->color('warning'), 

            Stat::make('Total Laporan Pending', $formatNumber($totalPending))
                ->description('Jumlah total nilai pending')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 25, 3, 39, 4, 46])
                ->color('secondary'), 
        ];
    }
}
