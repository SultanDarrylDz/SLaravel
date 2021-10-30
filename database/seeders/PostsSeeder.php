<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Sample Data Dari Table Posts
        $data = [
            ['title' => 'Karina Overpower',
                'content' => 'lorem ipsum'],
            ['title' => 'Belajar Laravel',
                'content' => 'lorem ipsum'],
            ['title' => '5 Langkah Agar Kamu Tidak Jadi Beban Keluarga',
                'content' => 'lorem ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}
