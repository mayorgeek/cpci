<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class UsersOverview extends BaseWidget
{

    public static function canView(): bool
    {
        return !(auth()->user()->isMember());
    }

    protected function getCards(): array
    {
        if (auth()->user()->isAdmin()) 
        {
            return [
                Card::make('Members', User::query()->where('role', 'member')->count()),
                Card::make('Secretaries', User::query()->where('role', 'secretary')->count()),
                Card::make('Pastors', User::query()->where('role', 'pastor')->count()),
                Card::make('Admins', User::query()->where('role', 'admin')->count()),
            ];
        }

        return [
            Card::make('Members', User::query()
                                    ->where('role', 'member')
                                    ->where('branch', auth()->user()->branch)
                                    ->count()),
        ];
    }
}
