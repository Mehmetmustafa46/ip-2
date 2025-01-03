<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odemeislemleri extends Model
{
    use HasFactory;

    protected $table = 'odemeislemleri';

    protected $fillable = [
        'RezervasyonID',
        'OdemeTarihi',
        'Tutar',
        'OdemeTipi'
    ];

    // İlişkiler
    public function rezervasyon()
    {
        return $this->belongsTo(rezervasyonlar::class, 'RezervasyonID');
    }
}
