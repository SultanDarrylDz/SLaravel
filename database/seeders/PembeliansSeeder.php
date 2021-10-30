<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_barang' => 'Sepatu',
                'nama_suplier' => 'Rico Achmad Pebiawan',
                    'qty' => 717,
                        'tgl' => '2021-05-23'],

            ['nama_barang' => 'Sandal',
                'nama_suplier' => 'Ruslan Ramdani',
                    'qty' => 238,
                        'tgl' => '2021-02-11'],

            ['nama_barang' => 'Baju',
                'nama_suplier' => 'Muhammad Rizky Say Afif',
                    'qty' => 931,
                        'tgl' => '2021-05-09'],

            ['nama_barang' => 'Celana',
                'nama_suplier' => 'Azhar Rizky Aulia',
                    'qty' => 850,
                        'tgl' => '2021-10-02'],

            ['nama_barang' => 'Tas',
                'nama_suplier' => 'Aziz Tubagus',
                    'qty' => 2,
                        'tgl' => '2021-10-27'],
        ];
        DB::table('pembelians')->insert($data);
    }
}
