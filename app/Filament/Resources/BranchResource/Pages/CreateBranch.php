<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateBranch extends CreateRecord
{
    protected static string $resource = BranchResource::class;

    protected function afterCreate(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'branch',
            'affected_resource_id' => $this->record->id,
            'action' => "Created a new branch"
        ]);
    }

}
