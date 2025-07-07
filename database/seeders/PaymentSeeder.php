<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {

            Payment::create([
                   'name'=>[
                        'en'=>fake()->word(),
                        'ar'=>fake()->word(),
                    ],
                    'description'=>[
                        'en'=>fake()->text(),
                        'ar'=>fake()->text(),
                    ],
                    'image'=>'uploads\payments\download.jpeg',
                    'active'=>rand(0,1),
                    'order_id'=>rand(1,10),
            ]);
        }




    }
}

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
