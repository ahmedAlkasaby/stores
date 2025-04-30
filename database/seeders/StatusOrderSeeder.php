<?php

namespace Database\Seeders;

use App\Models\StatusOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusOrder::create([
            'name' => [
                'en' => 'Pending',
                'ar' => 'قيد الانتظار',
            ],
            'description' => [
                'en' => 'Order is pending',
                'ar' => 'الطلب قيد الانتظار',
            ],
        ]);
        StatusOrder::create([
            'name' => [
                'en' => 'Processing',
                'ar' => 'قيد المعالجة',
            ],
            'description' => [
                'en' => 'Order is being processed',
                'ar' => 'الطلب قيد المعالجة',
            ],
        ]);
        StatusOrder::create([
            'name' => [
                'en' => 'Shipped',
                'ar' => 'تم الشحن',
            ],
            'description' => [
                'en' => 'Order has been shipped',
                'ar' => 'تم شحن الطلب',
            ],
        ]);
        StatusOrder::create([
            'name' => [
                'en' => 'Delivered',
                'ar' => 'تم التسليم',
            ],
            'description' => [
                'en' => 'Order has been delivered',
                'ar' => 'تم تسليم الطلب',
            ],
        ]);
        StatusOrder::create([
            'name' => [
                'en' => 'Cancelled',
                'ar' => 'ملغي',
            ],
            'description' => [
                'en' => 'Order has been cancelled',
                'ar' => 'تم إلغاء الطلب',
            ],
        ]);
        StatusOrder::create([
            'name' => [
                'en' => 'Returned',
                'ar' => 'تم إرجاعه',
            ],
            'description' => [
                'en' => 'Order has been returned',
                'ar' => 'تم إرجاع الطلب',
            ],
        ]);
    }
}
