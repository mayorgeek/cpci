<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UsersOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Users', User::count()),
        ];
    }
}
