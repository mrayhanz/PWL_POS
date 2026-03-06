<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3,
                'pembeli' => 'Agus',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-06-01',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-06-02',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Cici',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-06-03',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Dedi',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-06-04',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Eka',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-06-05',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Fajar',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-06-06',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Gina',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-06-07',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hadi',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-06-08',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Intan',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-06-09',
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-06-10',
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
