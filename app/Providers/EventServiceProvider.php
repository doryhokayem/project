<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen =  [
        'App\Events\EmailEvent' => [
        'App\Listeners\SendMail',
    ],
];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Event::listen('event.name', function ($foo, $bar) {
            
        //     $users=User::all();
         
        //     $array = array_pluck($users, 'email');
        //     Mail::to($user->email)->send(new NewProduct);
            
        // });
    }
}
