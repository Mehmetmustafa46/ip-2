<?php

namespace Database\Seeders;

use App\Models\oteller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class otellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        oteller::create([
            'OtelAdi' => 'Grand Hotel',
            'Lokasyon' => 'İstanbul',
            'YildizSayisi' => 5,
            'Aciklama' => 'Lüks bir otel, şehrin kalbinde.',
        ]);

        // Daha fazla otel ekleyebilirsiniz.
    }
}
