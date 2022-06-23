<?php

namespace App\Filament\Resources\EmailSubscriberResource\Pages;

use App\Filament\Resources\EmailSubscriberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmailSubscriber extends EditRecord
{
    protected static string $resource = EmailSubscriberResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
