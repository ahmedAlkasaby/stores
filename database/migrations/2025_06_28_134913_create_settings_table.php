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
            $table->string('logo');
            $table->string('facebbook');
            $table->string('youtube');
            $table->string('whatsapp');
            $table->string('snapchat');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('tiktok');

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
