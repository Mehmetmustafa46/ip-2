<?php

namespace Database\Seeders;

use App\Models\kampanyalar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kampanyalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        kampanyalar::create([
            'KampanyaAdi' => 'Yılbaşı İndirimi',
            'BaslangicTarihi' => '2024-12-01',
            'BitisTarihi' => '2025-01-01',
            'IndirimOrani' => 20.00,
            'KampanyaTipi' => 'Genel',
            'Aciklama' => 'Yeni yıl için büyük indirimler!',
        ]);

        // Daha fazla kampanya ekleyebilirsiniz.
    }
}
