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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_phone');
            $table->string('site_email');
            $table->integer('min_order');
            $table->integer('max_order');
            $table->integer('min_order_for_shipping_free');
            $table->integer('delivery_cost');
            $table->boolean('site_open');
            $table->boolean('active');
            $table->integer('result')->default(100);
            $table->string('logo');
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('telegram')->nullable();
            $table->integer('max_hour_product_in_carts')->default(1); 

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
