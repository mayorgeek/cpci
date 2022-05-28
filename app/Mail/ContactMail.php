<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $lastname;
    public $message;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $message)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact-mail');
    }
}
