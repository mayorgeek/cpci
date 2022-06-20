<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function afterSave(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'event',
            'affected_resource_id' => $this->record->id,
            'action' => 'Edited an event',
        ]);
    }

}
