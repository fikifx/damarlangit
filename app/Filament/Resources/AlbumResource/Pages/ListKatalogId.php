<?php

namespace App\Filament\Resources\AlbumResource\Pages;

use App\Filament\Resources\AlbumResource;
use App\Filament\Resources\KatalogResource;
use App\Models\Katalog;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\Facades\Log;

class ListKatalogId extends ListRecords
{
    protected static string $resource = KatalogResource::class;


    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->color("primary"),

        ];
    }


    protected function getTableQuery(): EloquentBuilder
    {
        $userId = request()->route('user'); 
        Log::info('Periode ID:', ['user' => $userId]);
        return Katalog::where('kd_user', $userId);
    }
}
