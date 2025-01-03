<?php

namespace Database\Seeders;

use App\Models\musteriler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class musterilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        musteriler::create([
            'Ad' => 'Mustafa',
            'Soyad' => 'Kara',
            'Eposta' => 'mustafa@otelsistemi.com',
            'Telefon' => '5551234567',
            'KayitTarihi' => now(),
        ]);

        // Diğer müşterileri de oluşturabilirsiniz.
    }
}
