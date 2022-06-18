<?php

namespace App\Filament\Resources\UserLogsResource\Pages;

use App\Filament\Resources\UserLogsResource;
use App\Models\UserLog;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUserLogs extends ListRecords
{
    protected static string $resource = UserLogsResource::class;

    protected function getTableQuery(): Builder
    {
        return UserLog::query()->orderBy('created_at', 'desc');
    }

}
