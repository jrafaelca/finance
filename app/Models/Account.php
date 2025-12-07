<?php

namespace App\Models;

use App\Enums\AccountStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'status',
        'display_name',
        'masked_number',
        'credit_limit',
        'interest_rate',
        'account_type_id',
        'bank_id',
        'user_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => AccountStatus::class,
            'masked_number' => 'string',
            'credit_limit' => 'decimal:2',
            'interest_rate' => 'decimal:2',
        ];
    }

    /**
     * Get the account type that owns the account.
     */
    public function accountType(): BelongsTo
    {
        return $this->belongsTo(AccountType::class);
    }

    /**
     * Get the bank that owns the account.
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }

    /**
     * Get the user that owns the account.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the movements for the account.
     */
    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class);
    }

    /**
     * Get the installments for the account.
     */
    public function installments(): HasMany
    {
        return $this->hasMany(Installment::class);
    }
}
