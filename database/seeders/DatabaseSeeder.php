<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


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
            CitySeeder::class,
            RegionSeeder::class,
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






    }
}
