<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Filament\Resources\BranchResource\Widgets\BranchOverview;
use App\Models\Branch;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListBranches extends ListRecords
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            BranchOverview::class,
        ];
    }

    protected function getTableQuery(): Builder
    {
        return Branch::query()->orderBy('created_at', 'desc');
    }

}
