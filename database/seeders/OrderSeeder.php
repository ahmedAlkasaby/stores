<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Product;
use App\Models\OrderItem;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $userIds = User::pluck('id')->toArray();
        $paymentIds = Payment::pluck('id')->toArray();
        $productIds = Product::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            $order = Order::create([

                'user_id'    => $faker->randomElement($userIds),
                'status'     => $faker->randomElement(['request', 'pending', 'approved', 'rejected', 'preparing', 'preparingFinished', 'deliveryGo', 'delivered', 'canceled', 'returned']),
                'payment_id' => $faker->randomElement($paymentIds),
                'shipping_address'   => $faker->randomFloat(2, 10, 50),
                'notes'      => $faker->optional()->sentence(),
                "address_id" => $faker->randomElement(Address::pluck('id')->toArray()),
                'created_at' => now()->subDays(rand(1, 365)),
                'updated_at' => now(),
            ]);

            $itemsCount = rand(1, 5);

            for ($j = 0; $j < $itemsCount; $j++) {
                $productId = $faker->randomElement($productIds);
                $price     = $faker->randomFloat(2, 50, 500);
                $discount  = $faker->randomFloat(2, 0, 100);

                OrderItem::create([
                    'order_id'      => $order->id,
                    'product_id'    => $productId,
                    'amount'        => rand(1, 3),
                    'price'         => $price,
                    'discount'      => $discount,
                    'shipping_cost' => $faker->randomFloat(2, 0, 20),
                    'created_at'    => $faker->dateTimeBetween($order->created_at, 'now'),
                    'updated_at'    => now(),
                ]);
            }
        }
    }
}
