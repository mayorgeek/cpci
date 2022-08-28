<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ViewUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Resources\UserResource\Widgets\UsersOverview;
use App\Models\Branch;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';


    protected static function shouldRegisterNavigation(): bool
    {
        return !(Auth::user()->isMember());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make([
                    FileUpload::make('profile_pic')
                        ->image()
                        ->disk('s3')
                        ->avatar()
                        ->directory('user-profile-pics'),
                    TextInput::make('name'),
                    TextInput::make('email'),
                    Select::make('role')
                        ->options([
                            'member' => 'Member',
                            'secretary' => 'Secretary',
                            'pastor' => 'Pastor',
                            'admin' => 'Admin'
                        ])
                        ->disabled(fn () => Auth::user()->role == 'member' ),
                    TextInput::make('phone'),
                    Select::make('branch')
                        ->options(Branch::all()->pluck('name', 'id')),
                    Select::make('fellowship')
                        ->options([
                            'teens' => 'Teens',
                            'youths' => 'Youths',
                            'women' => 'Women',
                            'men' => 'Men'
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('role'),
                TextColumn::make('phone'),
                TextColumn::make('branch'),
                TextColumn::make('fellowship'),
                TextColumn::make('created_at')
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
            'index' => Pages\ListUsers::route('/'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            UsersOverview::class,
        ];
    }

}
