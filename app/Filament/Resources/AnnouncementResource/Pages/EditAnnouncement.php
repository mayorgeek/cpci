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
            'action' => 'Edited an announcement',
        ]);
    }

}
