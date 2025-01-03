<?php

namespace Database\Seeders;

use App\Models\otelhizmetleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class otelhizmetleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        otelhizmetleri::create([
            'OtelID' => 1,
            'HizmetAdi' => 'Spa',
            'Aciklama' => 'Relaxing spa services.',
        ]);

        // Diğer otel hizmetlerini de ekleyebilirsiniz.
    }
}
