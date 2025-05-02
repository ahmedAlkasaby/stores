<?php

namespace Database\Seeders;

use App\Models\StoreType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        for ($i = 1; $i < 6; $i++) {
            $storeType = StoreType::create([
                'name' => [
                    'en' => 'Store Type ' . $i,
                    'ar' => 'نوع المتجر ' . $i,
                ],
                'description' => [
                    'en' => 'Description for Store Type ' . $i,
                    'ar' => 'وصف لنوع المتجر ' . $i,
                ],
                'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
            ]);

            for ($j = 1; $j <= 11; $j++) {
                $store = $storeType->stores()->create([
                    'name' => [
                        'en' => 'Store ' . $j,
                        'ar' => 'متجر ' . $j,
                    ],
                    'description' => [
                        'en' => 'Description for Store ' . $j,
                        'ar' => 'وصف للمتجر ' . $j,
                    ],
                    'address' => 'Address for Store ' . $j,
                    'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
                ]);

                for ($k = 1; $k <= 10; $k++) {
                    // parent categories
                    $categoryParent = $store->categories()->create([
                        'name' => [
                            'en' => 'Category ' . $k,
                            'ar' => 'فئة ' . $k,
                        ],
                        'description' => [
                            'en' => 'Description for Category ' . $k,
                            'ar' => 'وصف للفئة ' . $k,
                        ],
                        'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
                    ]);

                    // child categories
                    for ($l = 1; $l <= 5; $l++) {
                        $categoryChild = $categoryParent->children()->create([
                            'name' => [
                                'en' => 'Sub Category ' . $l,
                                'ar' => 'فئة فرعية ' . $l,
                            ],
                            'description' => [
                                'en' => 'Description for Sub Category ' . $l,
                                'ar' => 'وصف للفئة الفرعية ' . $l,
                            ],
                            'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
                            'store_id' => $store->id,
                        ]);

                    }


                    // for ($l = 1; $l <= 50; $l++) {
                    //     $category->products()->create([
                    //         'name' => [
                    //             'en' => 'Product ' . $l,
                    //             'ar' => 'منتج ' . $l,
                    //         ],
                    //         'description' => [
                    //             'en' => 'Description for Product ' . $l,
                    //             'ar' => 'وصف للمنتج ' . $l,
                    //         ],
                    //         'image' => 'uploads/storeTypes/storeTypeDefoult.jpg',
                    //         'qty' => 100,
                    //         'price' => fake()->numberBetween(100, 1000),
                    //         'store_id' => $category->store_id,
                    //     ]);
                    // }
                }
            }
        }
    }
}
