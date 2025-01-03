<?php

namespace Database\Seeders;

use App\Models\turduraklari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class turduraklariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        turduraklari::create([
            'TurID' => 1,
            'DurakAdi' => 'Topkapı Sarayı',
            'Aciklama' => 'Osmanlı İmparatorluğu’nun sarayı.',
        ]);

        turduraklari::create([
            'TurID' => 2,
            'DurakAdi' => 'Konyaaltı Plajı',
            'Aciklama' => 'Antalya’nın en ünlü plajlarından biri.',
        ]);

        // Diğer tur duraklarını da ekleyebilirsiniz.
    }
}
