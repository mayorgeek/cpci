<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubscribeForm extends Component
{

    public $name;
    public $email;

    public function render()
    {
        return view('livewire.subscribe-form');
    }

    public function subscribeEmail() {
        
    }

}
