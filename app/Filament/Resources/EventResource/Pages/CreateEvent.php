<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function afterCreate(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'event',
            'affected_resource_id' => $this->record->id,
            'action' => "Created an event"
        ]);
    }

}
