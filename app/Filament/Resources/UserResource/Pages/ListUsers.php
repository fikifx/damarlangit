<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Forms\Components\Builder;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder as BuilderTable;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Member'),
        ];
    }

    


    protected function getTableQuery(): BuilderTable
    {
        return User::whereHas('roles', function (BuilderTable $query) {
            $query->where('name', 'Member');
        })->orDoesntHave('roles');
    }
}
