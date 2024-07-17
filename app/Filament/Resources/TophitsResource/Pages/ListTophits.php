<?php

namespace App\Filament\Resources\TophitsResource\Pages;

use App\Filament\Resources\TophitsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTophits extends ListRecords
{
    protected static string $resource = TophitsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
