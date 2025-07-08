<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use Faker\Factory as Faker;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $userIds = User::pluck('id')->toArray();
        $cityIds = City::pluck('id')->toArray();
        for ($i = 0; $i < 20; $i++) {
            Address::create([
                'user_id' => $faker->randomElement($userIds),
                "city_id" => $faker->randomElement($cityIds),
            ]);
        }
    }
}
