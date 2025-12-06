<?php

namespace App\Enums;

enum AccountState: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case CLOSED = 'closed';
}
