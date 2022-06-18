<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Widgets\UsersOverview;
use App\Models\User;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getTableQuery(): Builder
    {
        return User::query()->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UsersOverview::class,
        ];
    }

}
