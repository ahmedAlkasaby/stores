<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('link')->nullable();

            $table->text('name');
            $table->longText('description')->nullable();
            // image
            $table->string('image');
            $table->string('video')->nullable();
            $table->string('background')->nullable();
            $table->string('color')->nullable();

            // price
            $table->decimal('price', 10, 2);
            $table->decimal('offer_price', 10, 2)->nullable();
            $table->decimal('offer_amount', 10, 2)->nullable();
            $table->decimal('offer_percent', 10, 2)->nullable();
            $table->decimal('shipping_cost', 10, 2)->nullable();


            //order limit
            $table->decimal('start', 10, 2)->default(1);
            $table->decimal('skip', 10, 2)->default(1);
            $table->decimal('order_limit', 10, 2)->default(1);
            $table->decimal('max_order', 10, 2)->default(1);



            // status
            $table->boolean('active')->default(true);
            $table->boolean('feature')->default(true);
            $table->boolean('offer')->default(true);
            $table->boolean('new')->default(true);
            $table->boolean('special')->default(true);
            $table->boolean('filter')->default(true);
            $table->boolean('sale')->default(true);
            $table->boolean('late')->default(true);
            $table->boolean('stock')->default(true);
            $table->boolean('free_shipping')->default(true);
            $table->boolean('returned')->default(true);


            // dates
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_end')->nullable();


            // relations
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->nullOnDelete();
            $table->foreignId('size_id')->nullable()->constrained('sizes')->nullOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('products')->nullOnDelete();

            // order
            $table->integer('order_id')->nullable();


            $table->timestamps();
            $table->softDeletes();
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
