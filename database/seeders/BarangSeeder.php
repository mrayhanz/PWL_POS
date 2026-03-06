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
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'B01',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2000,
                'harga_jual' => 3000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B02',
                'barang_nama' => 'Teh Botol Sosro',
                'harga_beli' => 3000,
                'harga_jual' => 5000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B03',
                'barang_nama' => 'Laptop Asus',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B04',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 50000,
                'harga_jual' => 75000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B05',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 1000,
                'harga_jual' => 2000
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B06',
                'barang_nama' => 'Mie Sedaap',
                'harga_beli' => 2500,
                'harga_jual' => 3500
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B07',
                'barang_nama' => 'Aqua',
                'harga_beli' => 2000,
                'harga_jual' => 4000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B08',
                'barang_nama' => 'Smartphone Samsung',
                'harga_beli' => 3000000,
                'harga_jual' => 4000000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B09',
                'barang_nama' => 'Jaket Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 250000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B10',
                'barang_nama' => 'Penghapus',
                'harga_beli' => 500,
                'harga_jual' => 1500
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B11',
                'barang_nama' => 'Mie Goreng ABC',
                'harga_beli' => 2200,
                'harga_jual' => 3200
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B12',
                'barang_nama' => 'Teh Pucuk Harum',
                'harga_beli' => 2500,
                'harga_jual' => 4500
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B13',
                'barang_nama' => 'Tablet Apple',
                'harga_beli' => 4000000,
                'harga_jual' => 5000000
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B14',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 120000,
                'harga_jual' => 220000
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B15',
                'barang_nama' => 'Spidol',
                'harga_beli' => 2000,
                'harga_jual' => 4000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
