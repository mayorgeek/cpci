<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Widgets\UsersOverview;
use App\Models\User;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getTableQuery(): Builder
    {
        if (Auth::user()->isMember())
        {
            return User::query()->where('email', Auth::user()->email);
        }

        if (Auth::user()->isSecretary() || Auth::user()->isPastor())
        {
            return User::query()
                        ->where('branch', Auth::user()->branch)
                        ->whereNot('email', Auth::user()->email)
                        ->orderBy('created_at', 'desc');
        }

        return User::query()
                    ->whereNot('email', Auth::user()->email)
                    ->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            UsersOverview::class,
        ];
    }

}
