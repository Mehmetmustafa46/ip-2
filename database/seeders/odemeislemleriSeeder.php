<?php

namespace Database\Seeders;

use App\Models\odemeislemleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class odemeislemleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        odemeislemleri::create([
            'RezervasyonID' => 1,
            'OdemeTarihi' => '2024-12-31',
            'Tutar' => 450.00,
            'OdemeTipi' => 'Kredi Kartı',
        ]);

        // Diğer ödeme işlemlerini de ekleyebilirsiniz.
    }
}
