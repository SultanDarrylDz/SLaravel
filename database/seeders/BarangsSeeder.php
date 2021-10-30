<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Sepatu',
                'varian' => 'Berwarna Merah',
                    'harga_beli' => 145000,
                        'harga_jual' => 175000],

            ['nama' => 'Sandal',
                'varian' => 'Berwarna Kuning',
                    'harga_beli' => 10000,
                        'harga_jual' => 16000],

            ['nama' => 'Baju',
                'varian' => 'Berwarna Hijau',
                    'harga_beli' => 430000,
                        'harga_jual' => 635000],

            ['nama' => 'Celana',
                'varian' => 'Berwarna Biru',
                    'harga_beli' => 340000,
                        'harga_jual' => 390000],

            ['nama' => 'Tas',
                'varian' => 'Berwarna Ungu',
                    'harga_beli' => 806000,
                        'harga_jual' => 1340000],
        ];
        DB::table('barangs')->insert($data);
    }
}
