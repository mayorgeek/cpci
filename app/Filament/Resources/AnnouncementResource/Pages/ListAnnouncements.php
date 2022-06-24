<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use App\Filament\Resources\AnnouncementResource\Widgets\AnnouncementOverview;
use App\Models\Announcement;
use App\Models\Branch;
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
        if (auth()->user()->isAdmin()){
            return Announcement::query()
                                ->orderBy('created_at', 'desc');    
        }

        return Announcement::query()
                            ->where('branch_id', Branch::where('name', auth()->user()->branch)->first()->id)
                            ->orderBy('created_at', 'desc');
    }

}
