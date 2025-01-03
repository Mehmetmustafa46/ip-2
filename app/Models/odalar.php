<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odalar extends Model
{
    use HasFactory;

    protected $table = 'odalar';

    protected $fillable = [
        'OtelID',
        'OdaTipi',
        'Fiyat',
        'Durum'
    ];

    // İlişkiler
    public function otel()
    {
        return $this->belongsTo(oteller::class, 'OtelID');
    }

    public function odahizmetleri()
    {
        return $this->hasMany(odahizmetleri::class, 'OdaID');
    }

    public function odaResimleri()
    {
        return $this->hasMany(odaresimleri::class, 'OdaID');
    }

    public function otelRezervasyonlar()
    {
        return $this->hasMany(OtelRezervasyon::class, 'OdaID');
    }
}
