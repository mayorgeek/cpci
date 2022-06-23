<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailSubscriberResource\Pages;
use App\Filament\Resources\EmailSubscriberResource\RelationManagers;
use App\Filament\Resources\EmailSubscriberResource\Widgets\EmailSubscribersOverview;
use App\Models\EmailSubscriber;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmailSubscriberResource extends Resource
{
    protected static ?string $model = EmailSubscriber::class;

    protected static ?string $navigationIcon = 'heroicon-o-mail';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('created_at')
                    ->dateTime()
            ])
            ->filters([
                //
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmailSubscribers::route('/'),
        ];
    }    

    public static function getWidgets(): array
    {
        return [
            EmailSubscribersOverview::class,
        ];
    }

}
