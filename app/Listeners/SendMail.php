<?php

namespace App\Listeners;

use App\Events\EmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail
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
     * @param  EmailEvent  $event
     * @return void
     */
    public function handle(EmailEvent $event)
    {
         
    }
}
