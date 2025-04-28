<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        $invoices = [
            [
                'customer_name' => 'John Doe',
                'customer_mail' => 'customer1@example.com',
                'company' => 'ABC Corp',
                'address' => '123 Main St, City',
                'item' => 'Electronics',
                'product_name' => 'Laptop',
                'price' => 55000,
                'quantity' => 2,
                'total' => 110000,
                'payment' => 100000,
                'due' => 10000
            ],
            [
                'customer_name' => 'Jane Smith',
                'customer_mail' => 'customer2@example.com',
                'company' => 'XYZ Ltd',
                'address' => '456 Oak Ave, Town',
                'item' => 'Electronics',
                'product_name' => 'Smartphone',
                'price' => 25000,
                'quantity' => 3,
                'total' => 75000,
                'payment' => 75000,
                'due' => 0
            ],
            [
                'customer_name' => 'Bob Johnson',
                'customer_mail' => 'customer3@example.com',
                'company' => 'Tech Solutions',
                'address' => '789 Pine Rd, Village',
                'item' => 'Accessories',
                'product_name' => 'Headphones',
                'price' => 2500,
                'quantity' => 5,
                'total' => 12500,
                'payment' => 10000,
                'due' => 2500
            ]
        ];

        foreach ($invoices as $invoice) {
            Invoice::create($invoice);
        }
    }
} 