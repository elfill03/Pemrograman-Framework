<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
            'kode_barang' => 'BCA',
            'nama_barang' => 'Monitor',
            'harga_barang' => '25050000',
            'deskripsi_barang' => 'Monitor 40 inch 4k HD',
            'satuan_id' => 2,
            ],
            [
            'kode_barang' => 'BNI',
            'nama_barang' => 'Mouse',
            'harga_barang' => '155000',
            'deskripsi_barang' => 'Mouse gaming teknologi logik',
            'satuan_id' => 2,
            ],
            [
            'kode_barang' => 'BRI',
            'nama_barang' => 'Kursi Kantor',
            'harga_barang' => '12000000',
            'deskripsi_barang' => 'Kursi kantor dengan variasi warna dan multifungsi',
            'satuan_id' => 1,
            ],
            ]);
    }
}
