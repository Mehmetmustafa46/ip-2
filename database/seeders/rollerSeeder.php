<?php

namespace Database\Seeders;

use App\Models\roller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class rollerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        roller::create([
            'RolAdi' => 'Admin',
            'Aciklama' => 'Yönetici',
        ]);

        roller::create([
            'RolAdi' => 'Yonetici',
            'Aciklama' => 'Otel Yöneticisi',
        ]);

        roller::create([
            'RolAdi' => 'Musteri',
            'Aciklama' => 'Müşteri',
        ]);
    }
}
