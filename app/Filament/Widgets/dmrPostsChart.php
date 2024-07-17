<?php

namespace App\Filament\Widgets;

use App\Models\Royalti;
use Filament\Widgets\ChartWidget;

// class DmrPostsChart extends ChartWidget
// {
//     protected static ?string $heading = 'Chart';

//     protected function getData(): array
//     {
//         $latestPeriods = Royalti::with('periode')
//             ->orderBy('id', 'desc')
//             ->get()
//             ->reverse();

//         $labels = [];
//         $generalValues = [];
//         $optimasiValues = [];
//         $pendingValues = [];

//         foreach ($latestPeriods as $period) {
//             if ($period->periode) {
//                 $labels[] = $period->periode->nm_periode; 

//                 // Ambil nilai 'general', 'optimasi', dan 'pending' dari periode tersebut
//                 $generalSum = Royalti::where('kd_periode', $period->kd_periode)->sum('general');
//                 $optimasiSum = Royalti::where('kd_periode', $period->kd_periode)->sum('optimasi');
//                 $pendingSum = Royalti::where('kd_periode', $period->kd_periode)->sum('pending');

//                 $generalValues[] = $generalSum ?? 0;
//                 $optimasiValues[] = $optimasiSum ?? 0;
//                 $pendingValues[] = $pendingSum ?? 0;
//             } else {
//                 // Handle jika relasi periode tidak tersedia
//                 $labels[] = 'Periode Tidak Tersedia';
//                 $generalValues[] = 0; 
//                 $optimasiValues[] = 0; 
//                 $pendingValues[] = 0; 
//             }
//         }

//         return [
//             'datasets' => [
//                 [
//                     'label' => 'General Value',
//                     'data' => $generalValues,
//                     'borderColor' => 'rgba(255, 99, 132, 1)',
//                     'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
//                     'fill' => false,
//                 ],
//                 [
//                     'label' => 'Optimasi Value',
//                     'data' => $optimasiValues,
//                     'borderColor' => 'rgba(54, 162, 235, 1)',
//                     'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
//                     'fill' => false,
//                 ],
//                 [
//                     'label' => 'Pending Value',
//                     'data' => $pendingValues,
//                     'borderColor' => 'rgba(75, 192, 192, 1)',
//                     'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
//                     'fill' => false,
//                 ],
//             ],
//             'labels' => $labels,
//         ];
//     }

//     protected function getType(): string
//     {
//         return 'bar';
//     }
// }
