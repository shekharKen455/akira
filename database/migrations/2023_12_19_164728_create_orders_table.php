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
            $table->foreignId('user_id')->constrained();
            $table->float('sub_amount')->nullable();
            $table->float('total_amount')->nullable();
            $table->json('address')->nullable();
            $table->enum('order_status', ['Pending', 'Processed', 'Dispatched', 'Out for Delivery', 'Delivered', 'Canceled', 'Refunded'])->default('Pending');
            $table->string('payment_id')->nullable();
            $table->string('custom_image')->nullable();
            $table->text('notes')->nullable();
            $table->enum('payment_status', ['Pending', 'Completed', 'Failed'])->nullable();
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
