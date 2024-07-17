<?php

namespace App\Filament\Resources\PeriodeResource\Pages;

use App\Filament\Resources\RoyaltiResource;
use App\Models\Royalti;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\Log;

class ListRoyaltiId extends ListRecords
{
    protected static string $resource = RoyaltiResource::class;

    

    protected function getTableQuery(): EloquentBuilder
    {
        $periodeId = request()->route('periode');
        Log::info('Periode ID:', ['periode' => $periodeId]);
        return Royalti::where('kd_periode', $periodeId);
    }
}
