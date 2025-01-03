<?php

namespace Database\Seeders;

use App\Models\turlar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class turlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        turlar::create([
            'SeyahatID' => 1,
            'TurAdi' => 'İstanbul Tarihi Turu',
            'Kapasite' => 20,
            'Fiyat' => 250.00,
        ]);

        turlar::create([
            'SeyahatID' => 2,
            'TurAdi' => 'Antalya Plajı Turu',
            'Kapasite' => 50,
            'Fiyat' => 400.00,
        ]);

        // Diğer turları da ekleyebilirsiniz.
    }
}
