<?php

namespace Database\Seeders;

use App\Models\kullanici;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KullaniciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kullanici::create([
            'KullaniciAdi' => 'admin',
            'SifreHash' => bcrypt('admin123'),
            'Ad' => 'Mustafa',
            'Soyad' => 'Kara',
            'Email' => 'mustafa@otelsistemi.com',
            'Telefon' => '5551234567',
            'Rol' => 'Admin',
            'KayitTarihi' => now(),
            'RolID' => 1, // Örnek olarak Admin rolünü kullanıyoruz.
        ]);
    }
}
