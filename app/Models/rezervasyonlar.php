<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rezervasyonlar extends Model
{
    use HasFactory;

    protected $table = 'rezervasyonlar';

    protected $fillable = [
        'MusteriID',
        'RezervasyonTipi',
        'IlgiliID',
        'RezervasyonTarihi',
        'ToplamTutar',
        'Durum'
    ];

    // İlişkiler
    public function musteri()
    {
        return $this->belongsTo(musteriler::class, 'MusteriID');
    }

    public function kampanyaRezervasyonlar()
    {
        return $this->hasMany(kampanyarezarvasyon::class, 'RezervasyonID');
    }

    public function otelRezervasyon()
    {
        return $this->hasOne(otelrezervasyonlar::class, 'RezervasyonID');
    }

    public function seyahatRezervasyon()
    {
        return $this->hasOne(seyahatrezervasyonlar::class, 'RezervasyonID');
    }
}
