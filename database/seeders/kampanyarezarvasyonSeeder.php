<?php

namespace Database\Seeders;

use App\Models\kampanyarezarvasyon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kampanyarezarvasyonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        kampanyarezarvasyon::create([
            'RezervasyonID' => 1,
            'KampanyaID' => 1,
        ]);

        kampanyarezarvasyon::create([
            'RezervasyonID' => 2,
            'KampanyaID' => 2,
        ]);

        // Diğer kampanya rezervasyonlarını da ekleyebilirsiniz.
    }
}
