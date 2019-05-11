<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactsMail extends Mailable
{
    use Queueable, SerializesModels;

    private $object;
    private $email;
    public $content;

    public function __construct($object, $email, $content)
    {
        $this->object = $object;
        $this->email = $email;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
//            ->from($this->email)
            ->replyTo($this->email)
            ->subject($this->object)
            ->to("pamv88@orange.fr")
            ->view('emails/contacts');
//            ->text($this->content);
    }
}
