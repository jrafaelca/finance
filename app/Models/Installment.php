<?php

namespace App\Models;

use App\Enums\InstallmentInterestType;
use App\Enums\InstallmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Installment extends Model
{
    use  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'status',
        'interest_type',
        'interest_rate',
        'original_amount',
        'total_amount',
        'installments_total',
        'account_id',
        'movement_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status'            => InstallmentStatus::class,
            'interest_type'     => InstallmentInterestType::class,
            'interest_rate'     => 'decimal:2',
            'original_amount'   => 'decimal:2',
            'total_amount'      => 'decimal:2',
        ];
    }

    /**
     * Account where the installment plan was created (typically a credit card account).
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * The original purchase movement that created this installment plan.
     */
    public function purchaseMovement(): BelongsTo
    {
        return $this->belongsTo(Movement::class, 'movement_id');
    }

    /**
     * Monthly cycle charges (credit_cycle_charge movements) associated with this plan.
     */
    public function charges()
    {
        return $this->hasMany(Movement::class, 'installment_id');
    }
}
