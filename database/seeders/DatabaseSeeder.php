<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
           'lang'=>'en',
           'theme'=>'light',
           'type'=>'admin'
       ]);
       $user->addRole('super_admin');
        $this->call([
            StoreSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Comment::factory(10)->create();
        // \App\Models\Category::factory(10)->create();
        // \App\Models\Tag::factory(10)->create();
    }
}
