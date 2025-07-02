<?php

namespace Database\Seeders;

use App\Models\Addition;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Size;
use App\Models\Store;
use App\Models\StoreType;
use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        StoreType::create([
            'name' => [
                'en' => 'Default Store Type',
                'ar' => 'نوع المتجر الافتراضي',
            ],
            'description' => [
                'en' => 'This is the default store type.',
                'ar' => 'هذا هو نوع المتجر الافتراضي.',
            ],
            'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        ]);
        // for($i = 1; $i < 6; $i++){
        //     Store::create([
        //         'name' => [
        //             'en' => 'unit Type ' . $i,
        //             'ar' => 'نوع المتجر ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for unit Type ' . $i,
        //             'ar' => 'وصف لنوع المتجر ' . $i,
        //         ],
        //         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //         'active' => true,
        //         "order_id" => $i,
        //         'store_type_id' => 1,
        //         "address" => 'Address for Store ' . $i,
        //     ]);
        // }
        // for($i = 1; $i < 6; $i++){
        //     Unit::create([
        //         'name' => [
        //             'en' => 'unit Type ' . $i,
        //             'ar' => 'نوع الوحدة ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for unit Type ' . $i,
        //             'ar' => 'وصف لنوع الوحدة ' . $i,
        //         ],
        //         'active' => true,
        //         "order_id" => $i,
        //     ]);
        // }
        // for($i = 1; $i < 6; $i++){
        //     Brand::create([
        //         'name' => [
        //             'en' => 'Brand ' . $i,
        //             'ar' => 'العلامة التجارية ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Brand ' . $i,
        //             'ar' => 'وصف للعلامة التجارية ' . $i,
        //         ],
        //         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //         'active' => true,
        //         "order_id" => $i,
        //     ]);
        // }
        // for($i = 1; $i < 6; $i++){
        //     Size::create([
        //         'name' => [
        //             'en' => 'Size ' . $i,
        //             'ar' => 'المقاس ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Size ' . $i,
        //             'ar' => 'وصف للمقاس ' . $i,
        //         ],
        //         'active' => true,
        //         "order_id" => $i,
        //     ]);
        // }

        // for($i = 1; $i < 6; $i++){
        //     $category=Category::create([
        //         'name' => [
        //             'en' => 'Category ' . $i,
        //             'ar' => 'الفئة ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Category ' . $i,
        //             'ar' => 'وصفmao للفئة ' . $i,
        //         ],
        //         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //         'active' => true,
        //         "order_id" => $i,
        //         'parent_id' => null,
        //         'store_id' => $i,
        //     ]);

        //     for($j = 1; $j < 6; $j++){
        //         $category->children()->create([
        //             'name' => [
        //                 'en' => 'Category ' . $i,
        //                 'ar' => 'الفئة ' . $i,
        //             ],
        //             'description' => [
        //                 'en' => 'Description for Category ' . $i,
        //                 'ar' => 'وصفmao للفئة ' . $i,
        //             ],
        //             'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //             'active' => true,
        //             "order_id" => $i,
        //             'store_id' => $category->store_id,
        //         ]);
        //     }



        // }
        // for($i = 1; $i < 6; $i++){
        //     Addition::create([
        //         'name' => [
        //             'en' => 'Addition ' . $i,
        //             'ar' => 'اضافة ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Addition ' . $i,
        //             'ar' => 'وصف للاضافة ' . $i,
        //         ],
        //         'active' => true,
        //         "order_id" => $i,
        //         "image" => "uploads/additions/addition.jpg"
        //     ]);
        // }
        // Setting::create([
        //     "site_title" => "Store_title",
        //     "site_phone"=> "01019631989",
        //     "site_email" => "KX3eC@example.com",
        //     "min_order" => 1,
        //     "max_order" => 10,
        //     "min_order_for_shipping_free" => 5,
        //     "delivery_cost" => 5,
        //     "site_open" => true,
        //     "active" => true,
        //     "logo" => "uploads/settings/logo.jpg",
        //     "facebook" => "https://www.facebook.com/",
        //     "youtube" => "https://www.youtube.com/",
        //     "whatsapp" => "https://www.whatsapp.com/",
        //     "snapchat" => "https://www.snapchat.com/",
        //     "instagram" => "https://www.instagram.com/",
        //     "twitter" => "https://www.twitter.com/",
        //     "tiktok" => "https://www.tiktok.com/",
        // ]);



        }
}
