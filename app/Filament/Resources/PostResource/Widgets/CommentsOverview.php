<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Database\Eloquent\Model;

class CommentsOverview extends BaseWidget
{
    public ?Model $record = null;

    protected function getCards(): array
    {
        return [
            Card::make('Comments', $this->record->comments()->count()),
        ];
    }
}
