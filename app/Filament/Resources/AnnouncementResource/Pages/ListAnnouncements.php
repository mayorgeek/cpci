<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use App\Filament\Resources\AnnouncementResource\Widgets\AnnouncementOverview;
use Filament\Resources\Pages\ListRecords;

class ListAnnouncements extends ListRecords
{
    protected static string $resource = AnnouncementResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            AnnouncementOverview::class,
        ];
    }

}
