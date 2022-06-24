<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['uploaded_by'] = auth()->user()->name;

        $eventLink = $data['event_link'];

        if (!(str_contains($eventLink, "embed")))
        {
            $data['event_link'] = substr($eventLink, 0, 8) . "youtube.com/embed" . substr($eventLink, -12, strlen($eventLink));
        }
    
        return $data;
    }

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
