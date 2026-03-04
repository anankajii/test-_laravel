<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Jl. Raya No. 123, Jakarta',
            'nomor_tlp' => '081234567890',
            'ttl' => '1990-01-01',
            'foto' => 'foto.jpg',
        ]);
    }
}
