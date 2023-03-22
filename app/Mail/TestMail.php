<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $title;
    public $message;
    public $sender;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $title, $message,$sender)
    {
        $this->sender=$sender;
        $this->name=$name;
        $this->title=$title;
        $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sender)->markdown('test');
    }
}
