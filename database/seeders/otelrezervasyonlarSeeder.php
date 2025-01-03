<?php

namespace Database\Seeders;

use App\Models\otelrezervasyonlar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class otelrezervasyonlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        otelrezervasyonlar::create([
            'RezervasyonID' => 1,
            'OdaId' => 1,
            'MusteriID' => 1,
            'GirisTarihi' => '2024-12-31',
            'CikisTarihi' => '2025-01-03',
            'ToplamTutar' => 300,

        ]);

        // Daha fazla rezervasyon ekleyebilirsiniz.
    }
}
