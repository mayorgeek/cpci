<?php

namespace App\Filament\Resources\BranchResource\Widgets;

use App\Models\Branch;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class BranchOverview extends BaseWidget
{

    public static function canView(): bool
    {
        return auth()->user()->isAdmin();
    }

    protected function getCards(): array
    {
        return [
            Card::make('Number of Branches', Branch::count()),
        ];
    }
}
