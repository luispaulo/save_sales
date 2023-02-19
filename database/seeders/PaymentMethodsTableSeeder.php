<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            ['description' => 'Cartão de Crédito'],
            ['description' => 'Cartão de Dédito'],
            ['description' => 'Pix'],
            ['description' => 'Dinheiro']
        ];

        foreach ($paymentMethods as $paymentMethod) {
            PaymentMethod::create($paymentMethod);
        }
    }
}
