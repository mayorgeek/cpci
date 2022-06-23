<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OfferingPage extends Component
{

    public $name;
    public $email;
    public $amount;

    public function render()
    {
        return view('livewire.offering-page');
    }

    public function offering(): void {

    }
}
