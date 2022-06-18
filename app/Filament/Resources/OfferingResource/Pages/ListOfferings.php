<?php

namespace App\Filament\Resources\OfferingResource\Pages;

use App\Filament\Resources\OfferingResource;
use App\Filament\Resources\OfferingResource\Widgets\OfferingChart;
use App\Models\Offering;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListOfferings extends ListRecords
{
    protected static string $resource = OfferingResource::class;

    protected function getTableQuery(): Builder
    {
        return Offering::query()->orderBy('created_at', 'desc');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OfferingChart::class,
        ];
    }

}
