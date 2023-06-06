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
                'kode_satuan' => 'UN',
                'nama_satuan' => 'Unit'
            ],
            [
                'kode_satuan' => 'ST',
                'nama_satuan' => 'Set'
            ],
            [
                'kode_satuan' => 'PC',
                'nama_satuan' => 'Pcs'
            ],
            [
                'kode_satuan' => 'KG',
                'nama_satuan' => 'Kilogram'
            ],
            [
                'kode_satuan' => 'LT',
                'nama_satuan' => 'Liter'
            ],
        ]);
    }
}
