<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_pelanggan' => 'Sultan Darryl Dzulfikar',
                    'nama_barang' => 'Sepatu',
                        'qty' => 124,
                            'tgl_pesan' => '2021-05-22'],

            ['nama_pelanggan' => 'Rizky Nurahman',
                    'nama_barang' => 'Sandal',
                        'qty' => 41,
                            'tgl_pesan' => '2021-02-10'],

            ['nama_pelanggan' => 'Whildan Nur Salim',
                    'nama_barang' => 'Baju',
                        'qty' => 25,
                            'tgl_pesan' => '2021-05-08'],

            ['nama_pelanggan' => 'Adele Laurie Blue Adkins',
                    'nama_barang' => 'Celana',
                        'qty' => 64,
                            'tgl_pesan' => '2021-10-01'],

            ['nama_pelanggan' => 'Peter Gene Hernadez',
                    'nama_barang' => 'Tas',
                        'qty' => 1,
                            'tgl_pesan' => '2021-10-21'],
        ];
        DB::table('pesanans')->insert($data);
    }
}
