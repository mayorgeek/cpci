<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Filament\Resources\BranchResource\Widgets\BranchOverview;
use Filament\Resources\Pages\ListRecords;

class ListBranches extends ListRecords
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            BranchOverview::class,
        ];
    }

}
