<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use App\Filament\Resources\AnnouncementResource;
use App\Models\ActivityLog;
use App\Models\Branch;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends CreateRecord
{
    protected static string $resource = AnnouncementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['brach_id'] = Branch::where('name', auth()->user()->branch)->id;
    
        return $data;
    }

    protected function afterCreate(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'announcement',
            'affected_resource_id' => $this->record->id,
            'action' => 'Created an announcement',
        ]);
    }

}
