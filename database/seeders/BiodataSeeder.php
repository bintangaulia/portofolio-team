<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        Biodata::create([
            'nama' => 'Nama Contoh',
            'alamat' => 'Alamat Contoh',
            'tanggal_lahir' => '2000-01-01',
            // tambahkan field lain sesuai kebutuhan
        ]);
    }
}
