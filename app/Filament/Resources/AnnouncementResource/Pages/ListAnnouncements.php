<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use App\Filament\Resources\AnnouncementResource\Widgets\AnnouncementOverview;
use App\Models\Announcement;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListAnnouncements extends ListRecords
{
    protected static string $resource = AnnouncementResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            AnnouncementOverview::class,
        ];
    }

    protected function getTableQuery(): Builder
    {
        return Announcement::query()->orderBy('created_at', 'desc');
    }

}
