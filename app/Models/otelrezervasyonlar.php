<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otelrezervasyonlar extends Model
{
    use HasFactory;

    protected $table = 'otelrezervasyonlar';

    protected $fillable = [
        'MusteriID',
        'OdaID',
        'GirisTarihi',
        'CikisTarihi',
        'ToplamTutar'
    ];

    // İlişkiler
    public function musteri()
    {
        return $this->belongsTo(musteriler::class, 'MusteriID');
    }

    public function oda()
    {
        return $this->belongsTo(odalar::class, 'OdaID');
    }
}
