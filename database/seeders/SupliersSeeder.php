<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Sultan Darryl Dzulfikar',
                    'alamat' => 'Jl. Cicukang',
                        'kode_pos' => 4012048,
                            'kota' => 'Bandung'],

            ['nama' => 'Rizky Nurahman',
                    'alamat' => 'Jl. Cisirum',
                        'kode_pos' => 4010842,
                            'kota' => 'Bandung'],

            ['nama' => 'Whildan Nur Salim',
                    'alamat' => 'Jl. Palasari Sayati',
                        'kode_pos' => 4083154,
                            'kota' => 'Bandung'],

            ['nama' => 'Adele Laurie Blue Adkins',
                    'alamat' => 'Jl. Western Esplanade Portslade',
                        'kode_pos' => 1926412,
                            'kota' => 'London'],

            ['nama' => 'Peter Gene Hernadez',
                    'alamat' => 'Tas',
                        'kode_pos' => 9183642,
                            'kota' => 'Hawaii'],
        ];
        DB::table('supliers')->insert($data);
    }
}
