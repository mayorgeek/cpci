<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TithePage extends Component
{

    public $name;
    public $email;
    public $amount;

    public function render()
    {
        return view('livewire.tithe-page');
    }

    public function tithe(): void
    {
        
    }
}
