<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ACtiveUserJobs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $t='mohamedzayed52100@gamil.com';
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data ="this is data";
        $email_data=['mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
        'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,'mohamedzayed52100@gamil.com'  ,
    ];

   /// ACtiveUserJobs::dispatch();
///foreach ($email_data as $za) {
  //  $t='mohamedzayed52100@gamil.com';
    for($i =0 ; $i <count($email_data) ; $i++) {
    Mail::send('email', compact('data'), function ($message) {
        $message->from('ttrouth085@gamil.com', 'test mail truth');
        $message->to($this->t, 'test mail zayed');
        $message->subject('test mail truth');///('mohamedzayed52100@gamil.com'  , 'test mail zayed');
        $message->attach(public_path('api1.txt'));///('mohamedzayed52100@gamil.com'  , 'test mail zayed');
    });
}
       /// return response()->json(['satus' => 'good send']);

        /*
         function ($message) {
            $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe');
            $message->to('john@johndoe.com', 'John Doe');
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Subject');
            $message->priority(3);
            $message->attach('pathToFile');
        }); */
    }
}
