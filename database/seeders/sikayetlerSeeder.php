<?php

namespace Database\Seeders;

use App\Models\sikayetler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class sikayetlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        sikayetler::create([
            'MusteriID' => 1,
            'SikayetMetni' => 'Odam çok soğuktu, ısıtma sistemi düzgün çalışmıyordu.',
            'Tarih' => now(),
        ]);

        sikayetler::create([
            'MusteriID' => 2,
            'SikayetMetni' => 'Otel personeli ilgisizdi ve temizlik yetersizdi.',
            'Tarih' => now(),
        ]);

        // Diğer şikayetleri de ekleyebilirsiniz.
    }
}
