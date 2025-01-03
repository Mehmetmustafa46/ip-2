<?php

namespace Database\Seeders;

use App\Models\seyahatulasim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seyahatulasimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        seyahatulasim::create([
            'SeyahatID' => 1,
            'UlasimTipi' => 'Otobüs',
            'Fiyat' => 300.00,
        ]);

        seyahatulasim::create([
            'SeyahatID' => 2,
            'UlasimTipi' => 'Uçak',
            'Fiyat' => 500.00,
        ]);

        // Diğer seyahat ulaşım bilgilerini de ekleyebilirsiniz.
    }
}
