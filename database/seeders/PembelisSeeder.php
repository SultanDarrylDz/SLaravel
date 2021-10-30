<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisSeeder extends Seeder
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
                'jns_kelamin' => 'Laki-Laki',
                    'alamat' => 'Jl. Cicukang',
                        'kode_pos' => 4012048,
                            'kota' => 'Bandung',
                                'tgl_lahir' => '2004-08-24'],

            ['nama' => 'Rizky Nurahman',
                'jns_kelamin' => 'Laki-Laki',
                    'alamat' => 'Jl. Cisirum',
                        'kode_pos' => 4010842,
                            'kota' => 'Bandung',
                                'tgl_lahir' => '2004-07-05'],

            ['nama' => 'Whildan Nur Salim',
                'jns_kelamin' => 'Laki-Laki',
                    'alamat' => 'Jl. Palasari Sayati',
                        'kode_pos' => 4083154,
                            'kota' => 'Bandung',
                                'tgl_lahir' => '2004-01-03'],

            ['nama' => 'Adele Laurie Blue Adkins',
                'jns_kelamin' => 'Perempuan',
                    'alamat' => 'Jl. Western Esplanade Portslade',
                        'kode_pos' => 1926412,
                            'kota' => 'London',
                                'tgl_lahir' => '1988-05-05'],

            ['nama' => 'Peter Gene Hernadez',
                'jns_kelamin' => 'Laki-Laki',
                    'alamat' => 'Jl. Honolulu',
                        'kode_pos' => 9183642,
                            'kota' => 'Hawaii',
                                'tgl_lahir' => '1985-10-08'],
        ];
        DB::table('pembelis')->insert($data);
    }
}
