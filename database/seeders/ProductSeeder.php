<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'High-end gaming laptop',
            'price' => 1500,
            
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 800,
        ]);

        
            
    }
}
