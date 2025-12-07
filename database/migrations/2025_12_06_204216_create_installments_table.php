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
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('interest_type')->nullable();
            $table->decimal('interest_rate', 5, 2)->nullable();
            $table->decimal('original_amount', 14, 2);
            $table->decimal('total_amount', 14, 2);
            $table->unsignedInteger('installments_total');
            $table->foreignId('account_id')->constrained()->restrictOnDelete();
            $table->foreignId('movement_id')->constrained()->restrictOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};
