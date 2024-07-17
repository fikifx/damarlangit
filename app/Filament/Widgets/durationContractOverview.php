<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class durationContractOverview extends Widget

{
    protected static ?string $heading = 'Lama Durasi Kontrak';

    protected static string $view = 'filament.widgets.duration-contract-overview';

    protected static ?int $sort = -2;

    protected static bool $isLazy = false;
}
