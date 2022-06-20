<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['posted_by'] = auth()->user()->name;
    
        return $data;
    }

    protected function afterCreate(): void {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'post',
            'affected_resource_id' => $this->record->id,
            'action' => 'Created a blog post'
        ]);
    }

}
