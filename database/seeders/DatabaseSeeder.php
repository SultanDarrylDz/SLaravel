<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Pengiriman Data Ke Dalam Table di DB
        $this->call(PostsSeeder::class);
        $this->call(BarangsSeeder::class);
        $this->call(PembeliansSeeder::class);
        $this->call(PesanansSeeder::class);
        $this->call(PembelisSeeder::class);
        $this->call(SupliersSeeder::class);
    }
}
