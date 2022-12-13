<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $objDemo;

    public function __construct($objDemo)
    {
        $this->objDemo  = $objDemo;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('reservationMail')
        ->from($this->objDemo->email, $this->objDemo->name)
                    // ->subject($this->objDemo->subject)
                    ->with([ 'name' => $this->objDemo->name ]);
    }
}
