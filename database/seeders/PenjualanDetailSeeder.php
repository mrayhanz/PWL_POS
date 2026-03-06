<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            $data[] = [
                'penjualan_id' => rand(1, 10),
                'barang_id' => rand(1, 10),
                'harga' => rand(10000, 50000),
                'jumlah' => rand(1, 5),
            ];
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
