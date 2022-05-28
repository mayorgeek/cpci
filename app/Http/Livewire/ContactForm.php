<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $message;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function sendMessage() {
        Mail::to($this->email)->send(new ContactMail($this->firstname, $this->lastname, $this->message));
    }
}
