<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
           'name' => [
               'en' => 'Cash on Delivery',
               'ar' => 'الدفع عند الاستلام',
           ],
           'description' => [
               'en' => 'Cash on Delivery',
                'ar' => 'الدفع عند الاستلام',
           ],
        ]);

    }
}
