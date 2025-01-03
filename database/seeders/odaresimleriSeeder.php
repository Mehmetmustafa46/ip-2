<?php

namespace Database\Seeders;

use App\Models\odaresimleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class odaresimleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        odaresimleri::create([
            'OdaID' => 1,
            'ResimYolu' => 'images/rooms/room1.jpg',
        ]);

        // Diğer oda resimlerini de ekleyebilirsiniz.
    }
}
