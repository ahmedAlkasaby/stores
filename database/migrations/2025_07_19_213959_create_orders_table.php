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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');
            $table->foreignId('delivery_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('status')->default('request');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->foreignId('delivery_time_id')->nullable()->constrained('delivery_times')->onDelete('cascade');
            $table->decimal('shipping_address')->default(25);
            $table->text('notes')->nullable();
            $table->softDeletes();
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
