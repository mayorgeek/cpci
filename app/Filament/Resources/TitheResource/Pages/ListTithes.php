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
        if (auth()->user()->isAdmin())
        {
            return Tithe::query()
                        ->orderBy('created_at', 'desc');
        }

        return Tithe::query()
                    ->where('name', auth()->user()->name)
                    ->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            TitheChart::class,
        ];
    }

}
