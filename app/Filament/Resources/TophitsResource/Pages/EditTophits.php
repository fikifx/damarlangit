<?php

namespace App\Filament\Resources\TophitsResource\Pages;

use App\Filament\Resources\TophitsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTophits extends EditRecord
{
    protected static string $resource = TophitsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
