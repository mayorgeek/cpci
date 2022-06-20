<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;
    
    protected function afterSave(): void 
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'post',
            'affected_resource_id' => $this->record->id,
            'action' => 'Edited a post'
        ]);
    }

}
