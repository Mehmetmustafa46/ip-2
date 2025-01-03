<?php

namespace Database\Seeders;

use App\Models\turrehberatama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class turrehberatamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        turrehberatama::create([
            'TurID' => 1,
            'RehberID' => 1,
        ]);

        turrehberatama::create([
            'TurID' => 2,
            'RehberID' => 2,
        ]);

        // Diğer rehber atamalarını da ekleyebilirsiniz.
    }
}
