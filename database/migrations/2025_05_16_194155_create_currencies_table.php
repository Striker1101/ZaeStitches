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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // e.g., NGN, GHS, USD
            $table->string('name');           // e.g., Nigerian Naira
            $table->string('symbol');         // e.g., ₦, ₵, $
            $table->decimal('rate_to_naira', 10, 4); // 1 unit = ? Naira
            $table->string('country_code'); // e.g. NG, GH
            $table->string('flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
