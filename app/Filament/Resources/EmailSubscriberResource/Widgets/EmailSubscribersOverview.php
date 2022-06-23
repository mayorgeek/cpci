<?php

namespace App\Filament\Resources\EmailSubscriberResource\Widgets;

use App\Models\EmailSubscriber;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmailSubscribersOverview extends BaseWidget
{

    public static function canView(): bool
    {
        return auth()->user()->isAdmin();
    }

    protected function getCards(): array
    {
        return [
            Card::make('Email Subscribers', EmailSubscriber::count()),
        ];
    }
}
