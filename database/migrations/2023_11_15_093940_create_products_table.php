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
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('model');
            $table->string('code');
            $table->integer('cost');
            $table->integer('offer_price');
            $table->integer('regular_price');
            $table->string('service');
            $table->string('replacement');
            $table->integer('stock');
            $table->text('short_description');
            $table->longText('long_description');
            $table->integer('sales_count')->default(0);
            $table->integer('hit_count')->default(0);
            $table->integer('featured_status')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->string('image');
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
