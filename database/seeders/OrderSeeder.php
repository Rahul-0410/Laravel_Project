<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'email' => 'customer1@example.com',
                'product_code' => 'P001',
                'product_name' => 'Laptop',
                'quantity' => 2,
                'order_status' => 1
            ],
            [
                'email' => 'customer2@example.com',
                'product_code' => 'P002',
                'product_name' => 'Smartphone',
                'quantity' => 3,
                'order_status' => 0
            ],
            [
                'email' => 'customer3@example.com',
                'product_code' => 'P003',
                'product_name' => 'Headphones',
                'quantity' => 5,
                'order_status' => 1
            ],
            [
                'email' => 'customer4@example.com',
                'product_code' => 'P004',
                'product_name' => 'Mouse',
                'quantity' => 10,
                'order_status' => 0
            ],
            [
                'email' => 'customer5@example.com',
                'product_code' => 'P005',
                'product_name' => 'Keyboard',
                'quantity' => 4,
                'order_status' => 1
            ]
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
} 