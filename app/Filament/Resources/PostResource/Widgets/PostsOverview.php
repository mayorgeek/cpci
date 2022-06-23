<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class PostsOverview extends BaseWidget
{
    public static function canView(): bool
    {
        if (auth()->user()->isMember())
        {
            return false;
        }

        return true;
    }

    protected function getCards(): array
    {
        return [
            Card::make('Posts', Post::count()),
        ];
    }
}
