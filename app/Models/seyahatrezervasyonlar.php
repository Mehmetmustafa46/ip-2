<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seyahatrezervasyonlar extends Model
{
    use HasFactory;

    protected $table = 'seyahatrezervasyonlar';

    protected $fillable = [
        'MusteriID',
        'TurID',
        'RezervasyonTarihi',
        'ToplamTutar'
    ];

    // İlişkiler
    public function musteri()
    {
        return $this->belongsTo(musteriler::class, 'MusteriID');
    }

    public function tur()
    {
        return $this->belongsTo(turlar::class, 'TurID');
    }
}
