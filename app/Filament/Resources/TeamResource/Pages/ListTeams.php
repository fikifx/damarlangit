<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder as BuilderTable;

class ListTeams extends ListRecords
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Member'),
        ];
    }


    protected function getTableQuery(): BuilderTable
    {
        return User::whereHas('roles', function (BuilderTable $query) {
            $query->whereIn('name', ['super_admin', 'Admin User', 'Admin Katalog', 'Admin Laporan']);
        });
    }
}
