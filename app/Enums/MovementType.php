<?php

namespace App\Enums;

enum MovementType: string
{
    case PURCHASE = 'purchase';
    case EXPENSE = 'expense';
    case INCOME = 'income';
    case TRANSFER = 'transfer';
    case PAYMENT = 'payment';
    case CREDIT_CYCLE_CHARGE = 'credit_cycle_charge';
    case FEE = 'fee';
    case INTEREST = 'interest';
}
