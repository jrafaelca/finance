<?php

namespace App\Models;

use App\Enums\MovementTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'type',
        'date',
        'description',
        'amount',
        'installment_number',
        'installment_id',
        'account_id',
        'category_id',
        'merchant_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => MovementTypes::class,
            'date' => 'date',
            'amount' => 'decimal:2',
            'installment_number' => 'integer',
            'account_id'     => 'integer',
            'category_id'    => 'integer',
            'merchant_id'    => 'integer',
            'installment_id' => 'integer',
        ];
    }

    /**
     * Get the account that owns the movement.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the category that owns the movement.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the merchant that owns the movement.
     */
    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class);
    }

    /**
     * Get the installment that owns the movement.
     */
    public function installment(): BelongsTo
    {
        return $this->belongsTo(Installment::class);
    }

    /**
     * Get the installment plan associated with the movement.
     */
    public function installmentPlan(): HasOne
    {
        return $this->hasOne(Installment::class, 'movement_id');
    }
}
