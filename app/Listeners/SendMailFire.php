<?php

namespace App\Listeners;

use App\Events\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendMailFire
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendMail  $event
     * @return void
     */
    public function handle(SendMail $event)
    {
         $user=User::find($event->userId)->toArray();
       //// $user=User::find($event->userId);

        //return dd($user['email']);

        Mail::send('email'  , $user , function ($message) use ($user) {
            $message->to($user['email']);
            $message->subject('event testing mohamed zayed');

        });

    }
}
