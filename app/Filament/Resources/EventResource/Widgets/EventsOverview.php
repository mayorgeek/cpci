<?php

namespace App\Filament\Resources\EventResource\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EventsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Events', Event::count()),
        ];
    }
}
