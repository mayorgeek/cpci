<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Models\ActivityLog;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditBranch extends EditRecord
{
    protected static string $resource = BranchResource::class;

    protected function afterSave(): void
    {
        ActivityLog::create([
            'username' => Auth::user()->name,
            'affected_resource' => 'branch',
            'affected_resource_id' => $this->record->id,
            'action' => "Edited a branch information"
        ]);
    }

}
