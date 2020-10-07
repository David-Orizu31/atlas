<?php

namespace App\Mail;
use App\People;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class changedTrack extends Mailable
{
    use Queueable, SerializesModels;


    public $dataemail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $dataemail)
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
        // dd($this->dataemail['email']);
        return $this->to($this->dataemail['email'], $this->dataemail['name'])
        // ->bcc('another@another.com')
        ->subject('Your Order')
        ->markdown('email.trackingchanged');

           // return $this->view('email.trackinginfo');
}


}
