<?php

namespace App\Filament\Resources\EmailSubscriberResource\Pages;

use App\Filament\Resources\EmailSubscriberResource;
use App\Filament\Resources\EmailSubscriberResource\Widgets\EmailSubscribersOverview;
use App\Models\EmailSubscriber;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListEmailSubscribers extends ListRecords
{
    protected static string $resource = EmailSubscriberResource::class;

    protected function getTableQuery(): Builder
    {
        return EmailSubscriber::query()->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            EmailSubscribersOverview::class,
        ];
    }
}
