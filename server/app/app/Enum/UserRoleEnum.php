<?php
namespace App\Enum;

use App\Models\User;

enum UserRoleEnum:string
{
    case ADMIN = 'admin';
    case USER = 'user';

    public function roles(): array
    {
        return match( $this)
        {
            self::ADMIN=>[
                'view',
                'edit',
                'insert',
                'delete'
            ],
            self::USER=>[
                'view'
            ]
        };
    }
}
