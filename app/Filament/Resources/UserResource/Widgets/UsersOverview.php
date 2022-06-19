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
            Card::make('Members', User::query()->where('role', 'member')->count()),
            Card::make('Secretaries', User::query()->where('role', 'secetary')->count()),
            Card::make('Pastors', User::query()->where('role', 'pastor')->count()),
        ];
    }
}
