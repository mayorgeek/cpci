<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Card;
use Livewire\Component;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Concerns\InteractsWithForms;

class RegisterPage extends Component implements HasForms
{
    use InteractsWithForms;

    protected function getFormSchema(): array 
    {
        return [
            Card::make([
                TextInput::make('Name')
                ->required(),
                TextInput::make('Email Address')
                    ->required()
                    ->email(),
                TextInput::make('Phone Number')
                    ->required()
                    ->tel(),
                Select::make('Gender')
                    ->required()
                    ->options([
                        'Male',
                        'Female'
                    ]),
                DatePicker::make('Birthday')
                    ->required()
                    ->minDate(now()->subYears(150))
                    ->maxDate(now()),
                TextInput::make('Address')
                    ->required(),
                Select::make('Church Branch')
                    ->required()
                    ->options([
                        'Accra',
                        'Kumasi'
                    ]),
                Select::make('Fellowship Group')
                    ->required()
                    ->options([
                        'Teens',
                        'Youths',
                        'Women',
                        'Men'
                    ]),
                Select::make('What role do you play?')
                    ->required()
                    ->options([
                        'Member',
                        'Secretary',
                        'Pastor',
                        'Admin'
                    ]),
                ]),
        ];
    } 

    public function render()
    {
        return view('livewire.register-page');
    }
}
