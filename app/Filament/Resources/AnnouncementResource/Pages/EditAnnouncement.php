<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditAnnouncement extends EditRecord
{
    protected static string $resource = AnnouncementResource::class;

    protected function afterSave(): void 
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'announcement',
            'affected_resource_id' => $this->record->id,
            'action' => 'Edited an announcement',
        ]);
    }

}
