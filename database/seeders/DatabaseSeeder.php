<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Hoodie',
            'category' => 'hoodies',
            'description' => 'Quality hoodie from China',
            'price' => 45,
            'popular' => true,
            'sizes' => ['XS', 'S', 'L', 'XXL'],
            'colors' => ['black', 'red'],
            'images' => [
                'shop/hoodie_black.jpg',
                'shop/hoodie_red.jpg',
            ],
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'category' => 'tshirts',
            'description' => 'Brand new t-shirt',
            'price' => 98,
            'popular' => true,
            'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
            'colors' => ['black', 'red'],
            'images' => [
                'shop/tshirt_black.jpg',
                'shop/tshirt_red.jpg',
            ],
        ]);

        Product::create([
            'name' => 'Black mousepad',
            'category' => 'other',
            'description' => 'Big black mouse pad',
            'price' => 15,
            'popular' => false,
            'sizes' => [],
            'colors' => ['black'],
            'images' => [
                'shop/yolo_mousepad1.jpg',
                'shop/yolo_mousepad2.jpg',
                'shop/yolo_mousepad3.jpg',
            ],
        ]);

        Product::create([
            'name' => 'Red mousepad',
            'category' => 'other',
            'description' => 'Small red mouse pad',
            'price' => 10,
            'popular' => false,
            'sizes' => [],
            'colors' => ['red'],
            'images' => [
                'shop/yolo_mousepad_red1.jpg',
                'shop/yolo_mousepad_red2.jpg',
                'shop/yolo_mousepad_red3.jpg',
            ],
        ]);
    }
}
