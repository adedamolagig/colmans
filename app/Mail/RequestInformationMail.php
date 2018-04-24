<?php

namespace App\Mail;

use App\RequestInformation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestInformationMail extends Mailable
{
    use Queueable, SerializesModels;


   public $RequestInformation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(RequestInformation $RequestInformation)
    {
        $this->RequestInformation = $RequestInformation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.RequestInformationMail');
    }
}
