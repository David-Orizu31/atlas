<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Orderarrived extends Mailable
{
    use Queueable, SerializesModels;
    public $dataemail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataemail)
    {
        $this->dataemail = $dataemail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->dataemail['email'], $this->dataemail['name'])

        ->bcc('another@another.com')
        ->subject('Arrived Order')
        ->markdown('email.arrived');
    }
}
