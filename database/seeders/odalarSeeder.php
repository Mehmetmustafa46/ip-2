<?php

namespace Database\Seeders;

use App\Models\odalar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class odalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        odalar::create([
            'OtelID' => 1,
            'OdaTipi' => 'Tek Kişilik',
            'Fiyat' => 150.00,
            'Durum' => 'Uygun',
        ]);

        // Diğer oda tiplerini de ekleyebilirsiniz.
    }
}
