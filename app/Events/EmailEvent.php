<?php

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\Channel;
use Illuminate\Http\Request;
use App\Mail\NewProduct;
use App\User; 
use Mail; 

class EmailEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
   

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $users=User::all();

        $emails = array_pluck($users, 'email');
        Mail::to($emails)->send(new NewProduct);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
