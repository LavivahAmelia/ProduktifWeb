<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke table pegawai
        DB::table('detail_profile') ->insert([
            'address' => 'Jember',
            'nomor_telp' => '085732308707',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
