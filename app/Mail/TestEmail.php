<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.test')
                    ->from($this->data['sendermail'], $this->data['sendername'])
                    // ->cc($this->data['ccmail'], 'chaiwat')
                    // ->bcc($address, $name)
                    // ->replyTo($address, $name)
                    ->subject($this->data['title'])
                    ->with([
                         'test_message' => $this->data['message'] 
                    ]);;
    }
}
