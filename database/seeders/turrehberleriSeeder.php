<?php

namespace Database\Seeders;

use App\Models\turrehberleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class turrehberleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        turrehberleri::create([
            'Ad' => 'Ahmet',
            'Soyad' => 'Yılmaz',
            'Telefon' => '5551122334',
            'Email' => 'ahmet@rehber.com',
        ]);

        turrehberleri::create([
            'Ad' => 'Ayşe',
            'Soyad' => 'Kaya',
            'Telefon' => '5559988776',
            'Email' => 'ayse@rehber.com',
        ]);

        // Diğer rehberleri de ekleyebilirsiniz.
    }
}
