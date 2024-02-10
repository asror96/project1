<?php

namespace app\Listeners;

use App\Events\UserCreatedEvent;
use App\Models\Notification;
use App\Models\User;

class UserCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(): void
    {

        $admins=User::where('role',\App\Enum\UserRoleEnum::ADMIN)->get();

        foreach ($admins as $admin){
            Notification::create( [
                'user_id'=>$admin->id,
                'text'=>'Login new user by name '//.($event->data->name).' email: '.$event->data->email
            ]);
        }
        //
    }
}
