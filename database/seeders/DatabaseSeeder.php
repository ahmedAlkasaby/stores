<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {



        $this->call([
            LaratrustSeeder::class,
            AdminSeeder::class,
            StoreSeeder::class,
            ProductSeeder::class,
            SliderSeeder::class,
            UserSeeder::class,
            NotificationSeeder::class,
            ContactSeeder::class,
        ]);






    }
}
