<?php

namespace App\Filament\Resources\AnnouncementResource\Widgets;

use App\Models\Announcement;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AnnouncementOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Announcements', Announcement::count()),
        ];
    }
}
