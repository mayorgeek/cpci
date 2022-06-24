<?php

namespace App\Filament\Resources\EventResource\Widgets;

use App\Models\Event;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EventsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        if (auth()->user()->isAdmin())
        {
            return [
                Card::make('Events', Event::count()),
            ];
        }

        return [
            Card::make('Events', Event::where('uploaded_by', auth()->user()->name)->count()),
        ];
    }
}
