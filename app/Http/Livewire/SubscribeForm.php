<?php

namespace App\Http\Livewire;

use App\Models\EmailSubscriber;
use Livewire\Component;


class SubscribeForm extends Component
{
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.subscribe-form');
    }

    public function subscribeEmail(): void {
        EmailSubscriber::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }

}
