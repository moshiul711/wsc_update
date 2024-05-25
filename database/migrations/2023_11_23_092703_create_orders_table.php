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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->integer('customer_id');
            $table->integer('delivery_id');
            $table->string('order_date');
            $table->string('order_timestamp');
            $table->string('order_total');
            $table->string('delivery_charge')->nullable();
            $table->string('discount')->nullable();
            $table->string('payment_amount');
            $table->string('payment_method');

            $table->string('order_status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->string('delivery_status')->default('pending');
            $table->integer('courier_id')->default(0);
            $table->string('currency')->default('BDT');
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
