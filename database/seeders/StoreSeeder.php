<?php

namespace Database\Seeders;

use App\Models\Brand;
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
        for($i = 1; $i < 6; $i++){
            Store::create([
                'name' => [
                    'en' => 'unit Type ' . $i,
                    'ar' => 'نوع المتجر ' . $i,
                ],
                'description' => [
                    'en' => 'Description for unit Type ' . $i,
                    'ar' => 'وصف لنوع المتجر ' . $i,
                ],
                'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
                'active' => true,
                "order_id" => $i,
                'store_type_id' => 1,
                "address" => 'Address for Store ' . $i,
            ]);
        }
        Setting::create([
            "site_title" => "Store_title",
            "site_phone"=> "01019631989",
            "site_email" => "KX3eC@example.com",
            "min_order" => 1,
            "max_order" => 10,
            "min_order_for_shipping_free" => 5,
            "delivery_cost" => 5,
            "site_open" => true,
            "active" => true,
            "logo" => "uploads/settings/logo.jpg",
            "facebook" => "https://www.facebook.com/",
            "youtube" => "https://www.youtube.com/",
            "whatsapp" => "https://www.whatsapp.com/",
            "snapchat" => "https://www.snapchat.com/",
            "instagram" => "https://www.instagram.com/",
            "twitter" => "https://www.twitter.com/",
            "tiktok" => "https://www.tiktok.com/",
        ]);

        
        // }
        // for($i = 1; $i < 6; $i++){
        //      Size::create([
        //         'name' => [
        //             'en' => 'Store Type ' . $i,
        //             'ar' => 'نوع المتجر ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Store Type ' . $i,
        //             'ar' => 'وصف لنوع المتجر ' . $i,
        //         ],
        //         'active' => true,
        //         "order_id" => $i,
        //     ]);

        
        // for ($i = 1; $i < 6; $i++) {
        //     $storeType = StoreType::create([
        //         'name' => [
        //             'en' => 'Store Type ' . $i,
        //             'ar' => 'نوع المتجر ' . $i,
        //         ],
        //         'description' => [
        //             'en' => 'Description for Store Type ' . $i,
        //             'ar' => 'وصف لنوع المتجر ' . $i,
        //         ],
        //         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //     ]);

        //     for ($j = 1; $j <= 11; $j++) {
        //         $store = $storeType->stores()->create([
        //             'name' => [
        //                 'en' => 'Store ' . $j,
        //                 'ar' => 'متجر ' . $j,
        //             ],
        //             'description' => [
        //                 'en' => 'Description for Store ' . $j,
        //                 'ar' => 'وصف للمتجر ' . $j,
        //             ],
        //             'address' => 'Address for Store ' . $j,
        //             'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //         ]);

        //         for ($k = 1; $k <= 10; $k++) {
        //             // parent categories
        //             $categoryParent = $store->categories()->create([
        //                 'name' => [
        //                     'en' => 'Category ' . $k,
        //                     'ar' => 'فئة ' . $k,
        //                 ],
        //                 'description' => [
        //                     'en' => 'Description for Category ' . $k,
        //                     'ar' => 'وصف للفئة ' . $k,
        //                 ],
        //                 'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //             ]);

        //             // child categories
        //             for ($l = 1; $l <= 5; $l++) {
        //                 $categoryChild = $categoryParent->children()->create([
        //                     'name' => [
        //                         'en' => 'Sub Category ' . $l,
        //                         'ar' => 'فئة فرعية ' . $l,
        //                     ],
        //                     'description' => [
        //                         'en' => 'Description for Sub Category ' . $l,
        //                         'ar' => 'وصف للفئة الفرعية ' . $l,
        //                     ],
        //                     'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //                     'store_id' => $store->id,
        //                 ]);

        //             }

        //             //products parent and children


        //             for ($l = 1; $l <= 5; $l++) {
        //                 $productsParent=Product::create([
        //                      'code' => fake()->unique()->numberBetween(1000000, 9999999),
        //                     'link' =>'Product-' . Str::uuid(),
        //                     'name' => [
        //                         'en' => 'Product ' . $l,
        //                         'ar' => 'منتج ' . $l,
        //                     ],
        //                     'description' => [
        //                         'en' => 'Description for Product ' . $l,
        //                         'ar' => 'وصف للمنتج ' . $l,
        //                     ],
        //                     'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //                     'order_limit' => 1,
        //                     'max_order' => 10,

        //                     'stock_amount' => 100,
        //                     'max_amount' => fake()->numberBetween(50,100),
        //                     'feature' => rand(0, 1),
        //                     'price' => fake()->numberBetween(100, 1000),
        //                     'date_start'=> now(),
        //                     'date_end'=> now()->addDays(100),

        //                     'unit_id' => Unit::inRandomOrder()->first()->id,
        //                     'brand_id' => null,
        //                     'size_id' => null,
        //                     'parent_id' => null,
        //                     'store_id' => $store->id,
        //                 ]);
        //                 $productsParent->categories()->attach([$categoryChild->id,$categoryParent->id]);

        //                 for ($m = 1; $m <= 5; $m++) {
        //                     $productsChild=Product::create([
        //                          'code' => fake()->unique()->numberBetween(1000000, 9999999),
        //                         'link' =>'Product-' . Str::uuid(),
        //                         'name' => [
        //                             'en' => 'Product ' . $m,
        //                             'ar' => 'منتج ' . $m,
        //                         ],
        //                         'description' => [
        //                             'en' => 'Description for Product ' . $m,
        //                             'ar' => 'وصف للمنتج ' . $m,
        //                         ],
        //                         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //                         'order_limit' => 1,
        //                         'max_order' => 10,

        //                         'stock_amount' => 100,
        //                         'max_amount' => fake()->numberBetween(50,100),
        //                         'feature' => rand(0, 1),
        //                         'price' => fake()->numberBetween(100, 1000),
        //                         'date_start'=> now(),
        //                         'date_end'=> now()->addDays(100),

        //                         'unit_id' => Unit::inRandomOrder()->first()->id,
        //                         'brand_id' => null,
        //                         'size_id' => Size::inRandomOrder()->first()->id,
        //                         'parent_id' => $productsParent->id,
        //                         'store_id' => $store->id,
        //                     ]);

        //                    $productsChild->categories()->attach([$categoryChild->id,$categoryParent->id]);
        //                 }
        //             }

        //             // products without children
        //             for($f=1;$f<=50;$f++){
        //                 $productsParent=Product::create([
        //                     'code' => fake()->unique()->numberBetween(1000000, 9999999),
        //                     'link' =>'Product-' . Str::uuid(),
        //                     'name' => [
        //                         'en' => 'Product ' . $f,
        //                         'ar' => 'منتج ' . $f,
        //                     ],
        //                     'description' => [
        //                         'en' => 'Description for Product ' . $f,
        //                         'ar' => 'وصف للمنتج ' . $f,
        //                     ],
        //                     'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
        //                     'order_limit' => 1,
        //                     'max_order' => 10,

        //                     'stock_amount' => 100,
        //                     'max_amount' => fake()->numberBetween(50,100),
        //                     'feature' => rand(0, 1),
        //                     'price' => fake()->numberBetween(100, 1000),
        //                     'date_start'=> now(),
        //                     'date_end'=> now()->addDays(100),

        //                     'unit_id' => Unit::inRandomOrder()->first()->id,
        //                     'brand_id' => null,
        //                     'size_id' => null,
        //                     'parent_id' => null,
        //                     'store_id' => $store->id,

        //                 ]);
        //                 $productsParent->categories()->attach([$categoryChild->id]);
        //             }




        //         }
        //     }
        // }
        }
}
