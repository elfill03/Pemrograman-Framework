<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'FD',
                'nama_satuan' => 'Makanan',
            ],
            [
                'kode_satuan' => 'LK',
                'nama_satuan' => 'Elektronik',
            ],
            [
                'kode_satuan' => 'AM',
                'nama_satuan' => 'Alat Masak',
            ],
        ]);
    }
}
