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
                'kode_barang' => 'ALK01',
                'nama_barang' => 'Lemari Kayu',
                'harga_barang' => 5000000,
                'deskripsi_barang' => 'Lemari kayu dengan 2 pintu',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'AMS02',
                'nama_barang' => 'Meja Sekolah',
                'harga_barang' => 250000,
                'deskripsi_barang' => 'Meja terbuat dari besi pipa bulat',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'BSW03',
                'nama_barang' => 'Spidol Whiteboard',
                'harga_barang' => 8000,
                'deskripsi_barang' => 'Spidol berwarna hitam',
                'satuan_id' => 3
            ],
            [
                'kode_barang' => 'BKH04',
                'nama_barang' => 'Kertas HVS',
                'harga_barang' => 5000000,
                'deskripsi_barang' => 'Memiliki berat per kilo',
                'satuan_id' => 4
            ],
            [
                'kode_barang' => 'CAM05',
                'nama_barang' => 'Air mineral',
                'harga_barang' => 18000,
                'deskripsi_barang' => 'Air mineral dari pegunungan asli',
                'satuan_id' => 5
            ],
        ]);
    }
}
