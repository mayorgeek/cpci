<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TitheResource\Pages;
use App\Filament\Resources\TitheResource\RelationManagers;
use App\Filament\Resources\TitheResource\Widgets\TitheChart;
use App\Models\Tithe;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TitheResource extends Resource
{
    protected static ?string $model = Tithe::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

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
            'index' => Pages\ListTithes::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            TitheChart::class,
        ];
    }

}
