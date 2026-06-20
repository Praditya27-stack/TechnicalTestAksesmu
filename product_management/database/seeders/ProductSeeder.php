<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Laptop ASUS ROG', 'description' => 'Gaming laptop high performance', 'price' => 15000000.00, 'stock' => 10],
            ['name' => 'Mechanical Keyboard', 'description' => 'Blue switch RGB mechanical keyboard', 'price' => 550000.00, 'stock' => 50],
            ['name' => 'Wireless Mouse Logitech', 'description' => 'Ergonomic wireless mouse', 'price' => 250000.00, 'stock' => 100],
            ['name' => 'Monitor Dell 24 Inch', 'description' => 'IPS Panel 1080p 75Hz', 'price' => 1800000.00, 'stock' => 25],
            ['name' => 'Headset HyperX', 'description' => 'Noise cancelling gaming headset', 'price' => 1200000.00, 'stock' => 30],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
