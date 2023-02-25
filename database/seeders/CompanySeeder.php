<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Hadassa Teens kids',
                'email' => 'hadassa@hadassa.com',
                'cpf' => '01273476158',
                'cnpj' => '012532000135',
                'status' => 1,
                'start_date' => '2023-02-25',
                'end_date' => null,
                'theme_color' => '365214',
                'contact' => 'SIA TRECHO 11, BRASILIA',
            ],
            [
                'name' => 'My closet by Jack',
                'email' => 'mycloset@mycloset.com',
                'cpf' => '0325632516',
                'cnpj' => '0662511000137',
                'status' => 1,
                'start_date' => '2023-02-25',
                'end_date' => null,
                'theme_color' => '365214',
                'contact' => 'FEIRA DOS GOIANOS, TAGUATINGA',
            ],
        ];

        foreach ($companies as $company) {
            Company::create($company);
        }
    }
}
