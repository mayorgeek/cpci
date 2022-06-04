<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistrationForm extends Component
{

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.registration-form');
    }

    public function register() {
        $data = $this->validate([
            'name' => ['required','string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('filament.auth.login');
    }

}
