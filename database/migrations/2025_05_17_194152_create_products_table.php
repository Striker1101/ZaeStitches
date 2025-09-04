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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('rating')->default(0.0);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_available')->default(true);
            $table->boolean('is_latest')->default(false);
            $table->decimal('price', 10, 2); // base price
            $table->decimal('discount_price', 10, 2);
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('weight')->nullable();
            $table->string('dimension')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('material')->nullable();
            $table->string('featured_image')->nullable(); // single image path
            $table->enum('status', ['active', 'inactive', 'draft'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
