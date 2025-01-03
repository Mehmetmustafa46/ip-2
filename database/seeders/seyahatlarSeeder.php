<?php

namespace Database\Seeders;

use App\Models\seyahatlar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seyahatlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        seyahatlar::create([
            'SeyahatAdi' => 'İstanbul Turu',
            'BaslangicTarihi' => '2024-06-01',
            'BitisTarihi' => '2024-06-10',
            'Bolge' => 'İstanbul',
            'Aciklama' => 'Tarihi ve kültürel zenginliklere sahip İstanbul turu.',
        ]);

        seyahatlar::create([
            'SeyahatAdi' => 'Antalya Tatili',
            'BaslangicTarihi' => '2024-07-01',
            'BitisTarihi' => '2024-07-07',
            'Bolge' => 'Antalya',
            'Aciklama' => 'Plajda rahatlatıcı bir tatil keyfi.',
        ]);

        // Diğer seyahatleri de ekleyebilirsiniz.
    }
}
