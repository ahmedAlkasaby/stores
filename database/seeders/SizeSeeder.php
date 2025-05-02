<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    public function run(): void
    {
        $sizes = [
            [
                'name' => ['en' => 'Small', 'ar' => 'صغير'],
                'description' => ['en' => 'Small size', 'ar' => 'حجم صغير'],
            ],
            [
                'name' => ['en' => 'Medium', 'ar' => 'متوسط'],
                'description' => ['en' => 'Medium size', 'ar' => 'حجم متوسط'],
            ],
            [
                'name' => ['en' => 'Large', 'ar' => 'كبير'],
                'description' => ['en' => 'Large size', 'ar' => 'حجم كبير'],
            ],
            [
                'name' => ['en' => 'Extra Large', 'ar' => 'كبير جدا'],
                'description' => ['en' => 'Extra Large size', 'ar' => 'حجم كبير جدا'],
            ],
            // أضف باقي البيانات هنا
        ];

        foreach ($sizes as $size) {
            Size::create($size);
        }
    }
}
