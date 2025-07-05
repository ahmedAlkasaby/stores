<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // this main
        $this->call([
            SettingSeeder::class,
            LaratrustSeeder::class,
            AdminSeeder::class,
        ]);

        $this->call([
            StoreSeeder::class,
            ProductSeeder::class,
            SliderSeeder::class,
            UserSeeder::class,
            NotificationSeeder::class,
            ContactSeeder::class,
        ]);
            Wishlist::create([
                'user_id' => 1,
                "product_id"=>1
            ]);





    }
}
