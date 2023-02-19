<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductSale;
use Illuminate\Database\Seeder;

class ProductSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productSales = [
            [
                'description' => 'Product A',
                'price' => 10.99,
                'employee_id' => 1,
                'payment_method_id' => 2,
                'status' => 1,
            ],
            [
                'description' => 'Product B',
                'price' => 20.99,
                'employee_id' => 2,
                'payment_method_id' => 3,
                'status' => 1,
            ],
        ];

        foreach ($productSales as $productSale) {
            ProductSale::create($productSale);
        }
    }
}
