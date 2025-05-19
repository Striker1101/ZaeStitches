<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->morphs('payable'); // payable_id, payable_type (e.g., Order or Subscription)

            $table->string('provider'); // flutterwave, paystack
            $table->string('status')->default('pending'); // pending, success, failed
            $table->decimal('amount', 15, 2);
            $table->string('currency', 10)->default('NGN');
            $table->text('gateway_response')->nullable(); // store JSON or text from API
            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
