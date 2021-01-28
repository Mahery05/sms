<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignUp extends Mailable
{
    use Queueable, SerializesModels;

    
    public $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this
        ->subject('You have now an account')
        ->view('emails.signUp');
    }
}
