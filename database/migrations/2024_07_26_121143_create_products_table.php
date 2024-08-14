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
            $table->string('title');
            $table->string('image');
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('discounted_price')->default('0');
            $table->string('description');
            $table->string('product_brand');
            $table->string('product_code');
            $table->unsignedBigInteger('reward_points');
            $table->unsignedBigInteger('stock');
            $table->unsignedBigInteger('current_stock');
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
