<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oteller extends Model
{
    use HasFactory;

    protected $table = 'oteller';

    protected $fillable = [
        'OtelAdi',
        'Lokasyon',
        'YildizSayisi',
        'Aciklama'
    ];

    // İlişkiler
    public function odalar()
    {
        return $this->hasMany(odalar::class, 'OtelID');
    }

    public function otelHizmetleri()
    {
        return $this->hasMany(OtelHizmetleri::class, 'OtelID');
    }

    public function otelResimleri()
    {
        return $this->hasMany(OtelResimleri::class, 'OtelID');
    }

    public function otelRezervasyonlar()
    {
        return $this->hasMany(OtelRezervasyonlar::class, 'OtelID');
    }
}
