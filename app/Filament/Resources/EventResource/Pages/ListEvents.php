<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Filament\Resources\EventResource\Widgets\EventsOverview;
use App\Models\Event;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            EventsOverview::class,
        ];
    }

    protected function getTableQuery(): Builder
    {
        if (auth()->user()->isAdmin())
        {
            return Event::query()
                        ->orderBy('created_at', 'desc');    
        }

        return Event::query()
                    ->where('uploaded_by', auth()->user()->name)
                    ->orderBy('created_at', 'desc');
    }

}
