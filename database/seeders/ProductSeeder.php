<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'product_code' => 'P001',
                'name' => 'Laptop',
                'category' => 'Electronics',
                'stock' => 50,
                'unit_price' => 50000,
                'sales_unit_price' => 55000
            ],
            [
                'product_code' => 'P002',
                'name' => 'Smartphone',
                'category' => 'Electronics',
                'stock' => 100,
                'unit_price' => 20000,
                'sales_unit_price' => 25000
            ],
            [
                'product_code' => 'P003',
                'name' => 'Headphones',
                'category' => 'Accessories',
                'stock' => 200,
                'unit_price' => 2000,
                'sales_unit_price' => 2500
            ],
            [
                'product_code' => 'P004',
                'name' => 'Mouse',
                'category' => 'Accessories',
                'stock' => 150,
                'unit_price' => 500,
                'sales_unit_price' => 800
            ],
            [
                'product_code' => 'P005',
                'name' => 'Keyboard',
                'category' => 'Accessories',
                'stock' => 80,
                'unit_price' => 1000,
                'sales_unit_price' => 1500
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
} 