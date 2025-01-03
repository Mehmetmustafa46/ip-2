<?php

namespace Database\Seeders;

use App\Models\rezervasyonlar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rezervasyonlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            rezervasyonlar::create([
            'MusteriID' => 1,
            'RezervasyonTipi' => 'Otel',
            'IlgiliID' => 1,
            'RezervasyonTarihi' => '2024-12-01',
            'ToplamTutar' => 450.00,
            'Durum' => 'Onaylandı',
        ]);

        // Diğer rezervasyonları da ekleyebilirsiniz.
    }
}
