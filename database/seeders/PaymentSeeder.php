<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Helpers\PaymentHelper;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  $table->string('name');
        //     $table->string('description')->nullable();
        //     $table->boolean('active')->default(true);
        //     $table->string('image')->nullable();
        //     $table->integer('order_id')->nullable();
        $numberOfMethod=PaymentHelper::getPaymentTypes();
        foreach ($numberOfMethod as $key => $value) {
            Payment::create([
                'name'=>$key,
                'description'=>$value,
                'active'=>1,
                'image'=>null,
                'order_id'=>null,
            ]);
        }
    }
}
