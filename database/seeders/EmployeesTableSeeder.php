<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        $employees = [
            [
                'name' => 'Luis Paulo',
                'cpf' => '012.774.761-55',
                'birth_date' => '1986-07-17',
                'commission' => 10,
            ],
            [
                'name' => 'Bianca',
                'cpf' => '096.352.237-31',
                'birth_date' => '1988-05-26',
                'commission' => 15,
            ],
            [
                'name' => 'Jackson Campelo',
                'cpf' => '013.356.445-22',
                'birth_date' => '1985-01-21',
                'commission' => 5,
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}



