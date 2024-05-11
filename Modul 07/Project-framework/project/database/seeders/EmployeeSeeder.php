<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
            'firstname' => 'Rafael',
            'lastname' => 'Fillah',
            'email'=> 'testing@gmail.com',
            'age' => 18,
            'position_id' => 1
            ],
            [
            'firstname' => 'Dava',
            'lastname' => 'Maulana',
            'email'=> 'testing123@gmail.com',
            'age' => 19,
            'position_id' => 2
            ],
            [
            'firstname' => 'Dextara',
            'lastname' => 'Prespiero',
            'email'=> 'testing456@gmail.com',
            'age' => 20,
            'position_id' => 3
            ],
            ]);

    }
}
