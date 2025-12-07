<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('display_name');
            $table->string('masked_number')->nullable();
            $table->decimal('credit_limit', 12, 2)->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->decimal('current_balance', 14, 2)->default(0);
            $table->foreignId('account_type_id')->constrained();
            $table->foreignId('bank_id')->constrained()->restrictOnDelete();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
