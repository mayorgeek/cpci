<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistrationForm extends Component
{

    public $name;
    public $email;
    public $gender;
    public $birthday;
    public $phone;
    public $address;
    public $branch;
    public $fellowship;
    public $role;
    public $password;
    public $password_confirmation;

    public $branches;

    public function mount(): void
    {
        $this->branches = Branch::query()->pluck('name');
    }

    public function render()
    {
        return view('livewire.registration-form');
    }

    public function register() {
        $data = $this->validate([
            'name' => ['required','string'],
            'email' => ['required', 'email'],
            'gender' => ['required', 'string', 'in:male,female'],
            'birthday' => ['required'],
            'phone' => ['required'],
            'address' => ['required', 'string'],
            'branch' => ['required', 'string'],
            'fellowship' => ['required', 'string'],
            'role' => ['required', 'string'],
            'password' => ['required', 'confirmed'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'branch' => $data['branch'],
            'fellowship' => $data['fellowship'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('filament.auth.login');
    }

}
