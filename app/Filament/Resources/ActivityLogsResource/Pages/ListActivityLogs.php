<?php

namespace App\Filament\Resources\ActivityLogsResource\Pages;

use App\Filament\Resources\ActivityLogsResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListActivityLogs extends ListRecords
{
    protected static string $resource = ActivityLogsResource::class;

    protected function getTableQuery(): Builder
    {
        return ActivityLog::query()->orderBy('created_at', 'desc');
    }

}
