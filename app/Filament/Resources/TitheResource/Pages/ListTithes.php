<?php

namespace App\Filament\Resources\TitheResource\Pages;

use App\Filament\Resources\TitheResource;
use App\Filament\Resources\TitheResource\Widgets\TitheChart;
use App\Models\Tithe;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTithes extends ListRecords
{
    protected static string $resource = TitheResource::class;

    protected function getTableQuery(): Builder
    {
        return Tithe::query()->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            TitheChart::class,
        ];
    }

}
