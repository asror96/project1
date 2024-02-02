<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Validation\Rules\Enum;

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
    public function handle(UserCreatedEvent $event): void
    {

        $admins=User::where('role',\App\Enum\UserRoleEnum::ADMIN)->get();
        foreach ($admins as $admin){
            Notification::create( [
                'user_id'=>$admin->id,
                'text'=>'Login new user by name '.($event->data->name).' email: '.$event->data->email
            ]);
        }
        //
    }
}
