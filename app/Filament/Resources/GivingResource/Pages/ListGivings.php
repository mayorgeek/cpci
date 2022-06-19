<?php

namespace App\Filament\Resources\GivingResource\Pages;

use App\Filament\Resources\GivingResource;
use App\Filament\Resources\GivingResource\Widgets\GivingChart;
use App\Models\Giving;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListGivings extends ListRecords
{
    protected static string $resource = GivingResource::class;

    protected function getTableQuery(): Builder
    {
        return Giving::query()->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            GivingChart::class,
        ];
    }

}
