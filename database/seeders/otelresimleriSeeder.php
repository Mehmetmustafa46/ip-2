<?php

namespace Database\Seeders;

use App\Models\otelresimleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class otelresimleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        otelresimleri::create([
            'OtelID' => 1,
            'ResimYolu' => 'images/hotels/hotel1.jpg',
        ]);

        // Diğer otel resimlerini de ekleyebilirsiniz.
    }
}
