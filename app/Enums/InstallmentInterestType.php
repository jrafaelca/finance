<?php

namespace App\Enums;

enum InstallmentInterestType: string
{
    case PRICE = 'price';
    case FIXED_RATE = 'fixed_rate';
    case VARIABLE_RATE = 'variable_rate';
    case NO_INTEREST = 'no_interest';
}
