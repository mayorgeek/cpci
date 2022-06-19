<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GivingResource\Pages;
use App\Filament\Resources\GivingResource\RelationManagers;
use App\Filament\Resources\GivingResource\Widgets\GivingChart;
use App\Models\Giving;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GivingResource extends Resource
{
    protected static ?string $model = Giving::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'finances';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('trx_code'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListGivings::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            GivingChart::class,
        ];
    }

}
