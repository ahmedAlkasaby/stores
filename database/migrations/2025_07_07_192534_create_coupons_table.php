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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('code');
            $table->text('type');
            $table->integer('discount');
            $table->integer("max_discount")->default(0);
            $table->boolean("finish")->default(false);
            $table->integer("use_limit")->default(0);
            $table->integer("use_count")->default(0);
            $table->integer("min_order")->default(0);
            $table->boolean('active')->default(true);
            $table->integer('order_id')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_end')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
