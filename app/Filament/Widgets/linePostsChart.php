<?php

namespace App\Filament\Widgets;

use App\Models\Katalog;
use Filament\Widgets\ChartWidget;

// class LinePostsChart extends ChartWidget
// {
//     protected static ?string $heading = 'Chart';

//     protected function getData(): array
//     {
        
//         $latestPeriods = Katalog::selectRaw('DATE_FORMAT(tgl_submit, "%Y-%m") as period, COUNT(*) as katalog_count')
//             ->groupBy('period')
//             ->orderBy('period', 'asc') 
//             ->get();

//         $labels = [];
//         $katalogCounts = [];

//         foreach ($latestPeriods as $period) {
//             $labels[] = $period->period; 
//             $katalogCounts[] = $period->katalog_count; 
//         }

//         return [
//             'datasets' => [
//                 [
//                     'label' => 'Katalog Count',
//                     'data' => $katalogCounts,
//                     'borderColor' => 'rgba(255, 99, 132, 1)', 
//                     'backgroundColor' => 'rgba(255, 99, 132, 0.2)', 
//                     'fill' => false, 
//                 ],
//             ],
//             'labels' => $labels,
//         ];
//     }

//     protected function getType(): string
//     {
//         return 'line';
//     }
// }
