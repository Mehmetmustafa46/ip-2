<?php

namespace Database\Seeders;

use App\Models\seyahatrezervasyonlar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seyahatrezervasyonlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        seyahatrezervasyonlar::create([
            'MusteriID' => 1,
            'TurID' => 1,
            'RezervasyonTarihi' => '2024-06-01',
            'ToplamTutar' => 250.00,
        ]);

        seyahatrezervasyonlar::create([
            'MusteriID' => 2,
            'TurID' => 2,
            'RezervasyonTarihi' => '2024-07-01',
            'ToplamTutar' => 400.00,
        ]);

        // Diğer seyahat rezervasyonlarını da ekleyebilirsiniz.
    }
}
