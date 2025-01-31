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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->boolean('status')->default(true);
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('sub_category_id');
            $table->string('quantiy')->default('0')->comment('0=not quantiy,1=quantiy');
            $table->string('popular')->default('0')->comment('0=not popular,1=popular');
            $table->string('units')->default('0')->comment('0=not units,1=units');
            $table->string('unit_type')->default('0')->comment('0=not unit_type,1=unit_type');
            $table->string('unit_price')->default('0')->comment('0=not unit_price,1=unit_price');
            $table->string('unit_weight')->default('0')->comment('0=not unit_weight,1=unit_weight');

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
