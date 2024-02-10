<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventAdmin
{
     public function __construct(MOdel $model)
    {
        $admins=User::where('role',\App\Enum\UserRoleEnum::ADMIN)->get();
        foreach ($admins as $admin){
            Notification::create( [
                'user_id'=>$admin->id,
                'text'=>'Login new user by name!'
            ]);
        }
    }
}
