<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);

        $user = User::create([
            'first_name' => 'Ahmed',
            'last_name' => 'Alkasaby',
            'email' => 'alkasaby145@gmail.com',
            'password' => 'ahmed145',
            'phone' => '01000000000',
            'lang' => 'en',
            'theme' => 'light',
            'type' => 'admin'
        ]);
        $user->addRole('super_admin');
        $this->call([
            StoreSeeder::class,
        ]);

        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'first_name' => fake()->firstName(),
        //         'last_name' => fake()->lastName(),
        //         'email' => fake()->unique()->safeEmail(),
        //         'phone' => fake()->phoneNumber(),
        //         'password' => fake()->password(),
        //         'lang' => 'en',
        //         'theme' => 'light',
        //         'type' => fake()->randomElement(['admin', 'client', 'delivery']),
        //     ]);
        // }
        // for ($i = 0; $i < 10; $i++) {
        //     Contact::create([
        //         "email" => "osamy8088@gmail.com",
        //         "message" => fake()->text(),
        //         "read_at" => fake()->dateTime(),
        //         "title" => fake()->title(),
        //         "read_at" => fake()->dateTime(),
        //     ]);
        // }
        // Setting::create([
        //     "site_title" => "Store_title",
        //     "site_phone" => "01019631989",
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
