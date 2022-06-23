<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GivingPage extends Component
{

    public $name;
    public $email;
    public $phone;

    public function render()
    {
        return view('livewire.giving-page');
    }

    public function give(): void
    {

    }

}
