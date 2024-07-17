<?php

namespace App\Filament\Resources\KatalogResource\Pages;

use App\Filament\Resources\KatalogResource;
use App\Models\Katalog;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListKatalogs extends ListRecords
{
    protected static string $resource = KatalogResource::class;

    protected function getHeaderActions(): array
    {
        $user = Auth::user();

        $actions = [
            Actions\CreateAction::make()->label('Tambah Katalog'),
        ];

        if ($user && $user->hasRole('Member')) {
            return [];
        }

        $actions[] = \EightyNine\ExcelImport\ExcelImportAction::make()
                        ->color("primary");

        return $actions;
    }

    protected function getTableQuery(): ?Builder
    {
        $user = Auth::user();

        if ($user->hasRole('Member')) {
            return Katalog::where('kd_user', $user->id);
        }

        return Katalog::query();
    }
    
}
