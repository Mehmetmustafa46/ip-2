<?php

namespace Database\Seeders;

use App\Models\seyahatresimleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seyahatresimleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        seyahatresimleri::create([
            'SeyahatID' => 1,
            'ResimYolu' => 'images/seyahat/istanbul1.jpg',
        ]);

        seyahatresimleri::create([
            'SeyahatID' => 2,
            'ResimYolu' => 'images/seyahat/antalya1.jpg',
        ]);

        // Diğer seyahat resimlerini de ekleyebilirsiniz.
    }
}
