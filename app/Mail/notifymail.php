<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class notifymail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     private $data=[];
    public function __construct($data)
    {
        $this->data=$data;
        //
    }


    public function build(){
        return $this->from('ahmedzayed@gmail.com' , 'ahmed zayed')
        ->subject($this->data['subject'])->view('emails.index')->with('data'  , $this->data);
    }


    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Notifymail',
    //     );
    // }


    // public function content()
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // public function attachments()
    // {
    //     return [];
    // }
}




