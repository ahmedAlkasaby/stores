<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        $units = [
            ['en' => 'Kilogram', 'ar' => 'كيلوجرام'],
            ['en' => 'Gram', 'ar' => 'جرام'],
            ['en' => 'Liter', 'ar' => 'لتر'],
            ['en' => 'Milliliter', 'ar' => 'مليلتر'],
            ['en' => 'Centimeter', 'ar' => 'سنتيمتر'],
            ['en' => 'Meter', 'ar' => 'متر'],
            ['en' => 'Millimeter', 'ar' => 'ميليمتر'],
            ['en' => 'Square Meter', 'ar' => 'متر مربع'],
            ['en' => 'Cubic Meter', 'ar' => 'متر مكعب'],
            ['en' => 'Dozen', 'ar' => 'دزينة'],
            ['en' => 'Pack', 'ar' => 'عبوة'],
            ['en' => 'Box', 'ar' => 'صندوق'],
            ['en' => 'Bottle', 'ar' => 'زجاجة'],
            ['en' => 'Packet', 'ar' => 'عبوة'],
            ['en' => 'Piece', 'ar' => 'قطعة'],
            ['en' => 'Roll', 'ar' => 'لفة'],
            ['en' => 'Slice', 'ar' => 'شريحة'],
            ['en' => 'Cup', 'ar' => 'كوب'],
            ['en' => 'Spoon', 'ar' => 'ملعقة'],
            ['en' => 'Pound', 'ar' => 'باوند'],
            ['en' => 'Ounce', 'ar' => 'أونصة'],
            ['en' => 'Yard', 'ar' => 'ياردة'],
            ['en' => 'Foot', 'ar' => 'قدم'],
            ['en' => 'Inch', 'ar' => 'بوصة'],
            ['en' => 'Mile', 'ar' => 'ميل'],
        ];

        foreach ($units as $unit) {
            Unit::create([
                'name' => [
                    'en' => $unit['en'],
                    'ar' => $unit['ar'],
                ],
                'description' => [
                    'en' => $unit['en'],
                    'ar' => $unit['ar'],
                ],
            ]);
        }
    }
}
