<?php

namespace Database\Seeders;

use App\Models\odahizmetleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class odahizmetleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        odahizmetleri::create([
            'OdaID' => 1,
            'HizmetAdi' => 'Wi-Fi',
            'Aciklama' => 'Ücretsiz internet erişimi.',
        ]);

        // Diğer oda hizmetlerini de ekleyebilirsiniz.
    }
}
