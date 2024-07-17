<?php

namespace App\Filament\Resources\RoyaltiResource\Pages;

use App\Filament\Resources\RoyaltiResource;
use App\Models\Royalti;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListRoyaltis extends ListRecords
{
    protected static string $resource = RoyaltiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Royalti'),
        ];
    }

    protected function getTableQuery(): ?Builder
    {
        $user = Auth::user();

        if ($user->hasRole('Member')) {
            return Royalti::where('kd_user', $user->id)
                ->whereHas('periode', function ($query) {
                    $query->where('is_published', true);
                });
        }

        return Royalti::query();
    }

    
}
