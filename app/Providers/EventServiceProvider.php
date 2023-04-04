<?php

namespace App\Providers;

use App\Events\FireEvent;
use App\Events\RegisterEvent;
use App\Events\SendMail;
use App\Listeners\EmailListener;
use App\Listeners\FireListener;
use App\Listeners\SendMailFire;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        FireEvent::class=>[
            FireListener::class,


        ],
        SendMail::class=>[
            SendMailFire::class,


        ],
        // RegisterEvent::class=>[
        //     EmailListener::class,


        // ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
    protected $subscribe = [
        EmailListener::class,
    ];
}
