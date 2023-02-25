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
                'description' => 'Roupa 1',
                'price' => 135.99,
                'user_id' => 1,
                'payment_method_id' => 2,
                'status' => 1,
            ],
            [
                'description' => 'Acessorio 2',
                'price' => 200.99,
                'user_id' => 2,
                'payment_method_id' => 3,
                'status' => 1,
            ],
        ];

        foreach ($productSales as $productSale) {
            ProductSale::create($productSale);
        }
    }
}
