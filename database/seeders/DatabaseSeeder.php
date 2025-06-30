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
        $this->call(LaratrustSeeder::class);

        $user=User::create([
           'first_name'=>'Ahmed',
           'last_name'=>'Alkasaby',
           'email'=>'alkasaby145@gmail.com',
           'password'=>'ahmed145',
              'phone'=>'01000000000',
           'lang'=>'en',
           'theme'=>'light',
           'type'=>'admin'
       ]);
       $user->addRole('super_admin');
        $this->call([
            StoreSeeder::class,
        ]);

        for ($i = 0; $i < 10; $i++) {
         User::create([
           'first_name'=>fake()->firstName(),
           'last_name'=>fake()->lastName(),
           'email'=> fake()->unique()->safeEmail(),
           'phone'=> fake()->phoneNumber(),
           'password'=> fake()->password(),
           'lang'=>'en',
           'theme'=>'light',
           'type'=>fake()->randomElement(['admin', 'client','delivery']),
        ]);
        }
        for ($i = 0; $i < 10; $i++) {
            Contact::create([
                "email" => "osamy8088@gmail.com",
                "message" => fake()->text(),
                "read_at" => fake()->dateTime(),
                "title" => fake()->title(),
                "read_at" => fake()->dateTime(),
            ]);
        }


     
    }
}
