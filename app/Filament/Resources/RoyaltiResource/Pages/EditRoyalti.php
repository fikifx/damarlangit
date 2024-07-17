<?php

namespace App\Filament\Resources\RoyaltiResource\Pages;

use App\Filament\Resources\RoyaltiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoyalti extends EditRecord
{
    protected static string $resource = RoyaltiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];

        
    }
}
