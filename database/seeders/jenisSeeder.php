<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jenisLapor;
class jenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jenisLapor::create([
            'name' => 'Permohonan Pemeriksaan'
        ]);
        
        jenisLapor::create([
            'name' => 'Informasi Permasalahan Penyimpangan uang negara'
        ]);

        jenisLapor::create([
            'name' => 'Laporan hasil pemeriksaan'
        ]);

        jenisLapor::create([
            'name' => 'Kepegawaian'
        ]);

        jenisLapor::create([
            'name' => 'Informasi BPK yang di publikasikan'
        ]);
    }
}
