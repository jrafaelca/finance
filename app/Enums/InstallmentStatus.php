<?php

namespace App\Enums;

enum InstallmentStatus: string
{
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
}
