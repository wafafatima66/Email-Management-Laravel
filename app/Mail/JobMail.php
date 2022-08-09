<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobMail extends Mailable
{
    use Queueable, SerializesModels;

    public $send_from , $sub , $filenames ,  $details ;

    public function __construct($details)
    {
        $this->send_from = $details['send_from'] ; 
        $this->sub = $details['subject'] ; 
        $this->filenames = array_filter($details['filenames']) ; 
        $this->details = $details ; 
    }

    public function build()
    {
        // dd($this->filenames);
        $email =
        $this->from($this->send_from)
        ->replyTo($this->send_from)
        ->subject($this->sub)
        ->view('emails.Mail');
        foreach ($this->filenames as $filename){
            $email->attach($filename);
        }
        return $email;
    }

}
