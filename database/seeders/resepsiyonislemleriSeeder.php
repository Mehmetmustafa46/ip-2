<?php

namespace Database\Seeders;

use App\Models\resepsiyonislemleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class resepsiyonislemleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        resepsiyonislemleri::create([
            'RezervasyonID' => 1,
            'IslemTarihi' => '2024-01-01 10:30:00',
            'IslemTipi' => 'Check-in',
        ]);

        resepsiyonislemleri::create([
            'RezervasyonID' => 2,
            'IslemTarihi' => '2024-01-02 14:00:00',
            'IslemTipi' => 'Check-out',
        ]);

        resepsiyonislemleri::create([
            'RezervasyonID' => 3,
            'IslemTarihi' => '2024-01-03 12:15:00',
            'IslemTipi' => 'Oda Değişimi',
        ]);

        resepsiyonislemleri::create([
            'RezervasyonID' => 4,
            'IslemTarihi' => '2024-01-04 09:45:00',
            'IslemTipi' => 'Check-in',
        ]);

        resepsiyonislemleri::create([
            'RezervasyonID' => 5,
            'IslemTarihi' => '2024-01-05 17:00:00',
            'IslemTipi' => 'Check-out',
        ]);

        // Daha fazla işlem eklemek için burayı genişletebilirsiniz.
    }
}
