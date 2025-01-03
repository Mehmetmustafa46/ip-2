<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musteriler extends Model
{
    use HasFactory;

    protected $table = 'musteriler';

    protected $fillable = [
        'Ad',
        'Soyad',
        'Eposta',
        'Telefon',
        'KayitTarihi'
    ];

    // İlişkiler
    public function otelRezervasyonlar()
    {
        return $this->hasMany(otelrezervasyonlar::class, 'MusteriID');
    }

    public function seyahatRezervasyonlar()
    {
        return $this->hasMany(seyahatrezervasyonlar::class, 'MusteriID');
    }

    public function sikayetler()
    {
        return $this->hasMany(sikayetler::class, 'MusteriID');
    }
}
