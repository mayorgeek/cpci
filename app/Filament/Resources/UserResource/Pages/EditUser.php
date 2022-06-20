<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function afterSave(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'user',
            'affected_resource_id' => $this->record->id,
            'action' => 'Edited User Profile',
        ]);
    }

}
