<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;  

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();  
        $products = Product::inRandomOrder()->take(10)->get();  

        foreach ($products as $product) {
            Order::factory()
                ->count($faker->numberBetween(2, 6))  
                ->create([
                    'product_id' => $product->id,  
                ]);
        }
    }
}
