<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kullanici extends Model
{
    use HasFactory;

    protected $table = 'kullanici';

    protected $fillable = [
        'KullaniciAdi',
        'SifreHash',
        'Ad',
        'Soyad',
        'Email',
        'Telefon',
        'Rol',
        'KayitTarihi',
        'RolID'
    ];

    // İlişkiler
    public function rol()
    {
        return $this->belongsTo(roller::class, 'RolID');
    }
}
